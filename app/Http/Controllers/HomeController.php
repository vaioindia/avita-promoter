<?php

namespace App\Http\Controllers;

use App\Models\Stock_Report;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdminNotification;
use Facade\Ignition\Support\ComposerClassMap;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user= User::all();
        $adminNotification = AdminNotification::all();
        return view('home',compact('user','adminNotification'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $users = User::all()->whereNotIn('is_admin','1');
        return view('admin.adminHome');
    }

    public function showPrometers()
    {
        $users = User::all();
        return view('admin.prometer', compact('users'));
    }

    public function stockReport()
    {
        $adminNotification = AdminNotification::all();
        $id = Auth::id();
        $url = Stock_Report::select('google_link')->where('id', $id)->get()->first();
        // $google_link=Session::get('google_link');
        // $data=DB::select("select google_link from stock__reports where google_link='$google_link';");
        return view('user.stock-report', compact('url','adminNotification'));
        // return Redirect::to($url);
        //  dd($data);

    }


    public function singleNoitification()
    {
        $adminNotification = AdminNotification::all();
        return view('user.notification',compact('adminNotification'));
    }

    public function notificationDetail($slug)
    {
        $adminNotification = AdminNotification::all();
        $notification = AdminNotification::where('id', $slug)->get()->first();
        return view('user.detailnotification', compact('notification','adminNotification'));
    }

    // public function openstocklink($id){

    // $url = Stock_Report::select('google_link')->where('id', $id)->get();

    //     return Redirect::to($url);
    // }

    public function createNotification()
    {
        return view('admin.noitification');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'summery'   =>  'required',
            // 'file.*'    => 'required|mimes:jpg,jpeg,png,pdf,xlxs,xlx,ppt,pptx,csv|max:30720'
        ]);

        // $file = $request->file('file');
        // $new_name = $request->file->getClientOriginalName();
        // $file->move(public_path().'\Notifications', $new_name);

        // $fileName = $request->file('file');
        // $fileName = $request->file->getClientOriginalName();

        // $fileName = new AdminNotification([
        //     'file' => $request->reference->move(public_path().'\Notifications', $fileName),
        // ]);

        $form_data = array(
            'title'      =>   $request->title,
            'summery'    =>   $request->summery,
            // 'file'       =>   $fileName
        );

        AdminNotification::create($form_data);

        return redirect()->back()->with("success", "Send Notifications.");
    }

    public function sendNotification()
    {
        $user = User::all();
        $adminNotification = AdminNotification::first();

        $details = [

            'greeting'      => $user->name,
            'body'          => $adminNotification->title,
            'thanks'        => $adminNotification->summery,
            // 'actionText'    => 'View My Site',
            // 'actionURL'     => url('/'),
        ];

        Notification::send($user, new UserNotification($details));

        // $user->notify(new UserNotification($details, $adminNotification));
        dd('done');
    }



}

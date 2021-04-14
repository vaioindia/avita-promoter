<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock_Report;
use Illuminate\Support\Facades\DB;

class StockReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = User::get();
        $users = DB::select('select * from users');
        $stores = DB::select('select * from stores');
        return view('admin.report.create',['users'=>$users],['stores'=>$stores]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'store'             => 'required',
            'promoters_name'    => 'required',
            'promoters_id'      => 'required',
            'google_link'       => 'required',
        ]);

        // $stock_report = new Stock_Report();

        // $stock_report->store = $request->get('store');
        // $stock_report->promoters_name = $request->get('promoters_name');
        // $stock_report->promoters_id = $request->get('promoters_id');
        // $stock_report->google_link = $request->get('google_link');
        // $stock_report->save();

        Stock_Report::create($request->all());

        return redirect()->back()->with('success','Stock Report Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

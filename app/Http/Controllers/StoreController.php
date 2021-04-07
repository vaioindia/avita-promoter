<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.store.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store.create');
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
            'store_name' => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'state'      => 'required',
            'pincode'    => 'required',
        ]);

        $store = new Store();

        $store->store_name = $request->input('store_name');
        $store->address = $request->input('address');
        $store->city = $request->input('city');
        $store->state = $request->input('state');
        $store->pincode = $request->input('pincode');
        $store->save();
        return redirect()->back()->with('success','Store created successfully');
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
        $store = Store::find($id);
        return view('admin.store.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response $service = Service::where('id', $id)->first();
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'store_name' => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'state'      => 'required',
            'pincode'    => 'required',
        ]);

        $store = Store::where('id', $id)->first();

        $store->store_name = $request->input('store_name');
        $store->address = $request->input('address');
        $store->city = $request->input('city');
        $store->state = $request->input('state');
        $store->pincode = $request->input('pincode');
        $store->save();
        return redirect()->route('store.index')->with('success','created successfully');
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

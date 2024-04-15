<?php

namespace App\Http\Controllers;

use App\Models\Mypro;
use Illuminate\Http\Request;

class MyproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mydata = Mypro::get();
        return view('user.home',compact('mydata'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mypro = new Mypro();
        $mypro->name = $request->name;
        $mypro->city = $request->city;
        $mypro->phone = $request->phone;
        $mypro->address = $request->address;
        $mypro->save();
        return redirect()->route('Mypro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mypro  $mypro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mypro::find($id);
        return view('user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mypro  $mypro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mypro::find($id);
        return view('user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mypro  $mypro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Mypro::find($id);
        $data->name = $request->name;
        $data->city = $request->city;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        return redirect()->route('Mypro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mypro  $mypro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mypro::find($id);
        $data->delete();
        return redirect()->route('Mypro.index');
    }
}

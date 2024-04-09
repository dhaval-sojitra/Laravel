<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
// use Illumitate\Support\Str;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hospital::create($request->all());
        return redirect()->route('Hospital.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital,$id)
    {
        $hospital = Hospital::find($id);
        return view('show',compact('hospital'));
    }
    public function home(Hospital $hospital)
    {
        $patient = Hospital::get();
        return view('Home', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);
        return view('Edit',compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $hospital = Hospital::find($id);
        $hospital->name = $request->name;
        $hospital->number = $request->number;
        $hospital->deseases = $request->deseases;
        $hospital->medicines = $request->medicines;
        $hospital->slug = $request->slug;
        $hospital->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Hospital::find($id);
        $patient->delete($id);
        return redirect()->route('home');
    }

}

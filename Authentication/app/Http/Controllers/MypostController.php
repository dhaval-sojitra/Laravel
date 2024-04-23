<?php

namespace App\Http\Controllers;

use App\Models\Mypost;
use Illuminate\Http\Request;

class MypostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function show(Mypost $mypost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function edit(Mypost $mypost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mypost $mypost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mypost $mypost)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\mypost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// composer require laravel/jetstream
// php artisan jetstream:install livewire
class MypostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mypost = Mypost::paginate(10);
        return view('user.index',compact('mypost'));
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
        $slug = Str::slug($request->subtitle);
        $id = rand(1,11);
        Mypost::create($request->all() + ['slug'=> $slug,'user_id'=>$id]);
        return redirect()->route('mypost.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function show(mypost $mypost)
    {
        return view('user.show',compact('mypost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function edit(mypost $mypost)
    {
        return view('user.edit',compact('mypost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mypost $mypost)
    {
        mypost::create($request->all());
        return redirect()->route('mypost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mypost  $mypost
     * @return \Illuminate\Http\Response
     */
    public function destroy(mypost $mypost)
    {
        $mypost->delete();
        return redirect()->route('mypost.index');
    }
}

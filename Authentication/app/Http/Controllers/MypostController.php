<?php

namespace App\Http\Controllers;

use App\Models\Mypost;
use Illuminate\Support\Str;
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
        $user = auth()->user();
        $myposts = Mypost::paginate(10);
        return view('user.index',['myposts' => $myposts,'user'=>$user]);
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
        $slug = Str::slug( $request->title, '-');
        $uid = auth()->User()->id;
        Mypost::create($request->all() + ['slug' => $slug,'user_id'=>$uid]);
        return redirect()->route('mypost.index');
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

<?php

namespace App\Http\Controllers;
use App\Models\myblog;
use Illuminate\Http\Request;

class myController extends Controller
{
    function index(){
        return view('templates.home');
    }
    function create(){
        return view('user.create');
    }
    function home(){
        $mypost = myblog::get();
        return view('templates.home2',compact('mypost'));
    }
    function store(Request $request){
        $myblog = new myblog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->content = $request->content;
        $myblog->save();
        return redirect()->route('index');
    }
    function delete($id){
        $mypost = myblog::find($id);
        $mypost->delete();
        return redirect()->route('home');
    }
}

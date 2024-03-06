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
        return view('templates.home2');
    }
    function store(Request $request){
        $myblog = new myblog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->content = $request->content;
        $myblog->save();
        return redirect()->route('index');
    }
}

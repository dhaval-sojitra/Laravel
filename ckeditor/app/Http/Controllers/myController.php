<?php

namespace App\Http\Controllers;
use App\Models\myblog;
use App\Models\Comments;
use App\Models\User;
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
        $myblog->blog_id = $request->blog_id;
        $myblog->save();
        return redirect()->route('home');
    }
    function comment(Request $request,$id)
    {
        $comment = new Comments();
        $comment->content = $request->content;
        $comment->user_id = $request->user_id;
        $comment->blog_id = $request->blog_id;
        $comment->save();
        return redirect()->route('show',$comment->blog_id);
    }
    function delete($id){
        $mypost = myblog::find($id);
        $mypost->delete();
        return redirect()->route('home');
    }
    function show($id){
        $comment = comments::get();
        $mypost = myblog::find($id);
        return view('user.show' , compact('mypost','comment'));
    }
}

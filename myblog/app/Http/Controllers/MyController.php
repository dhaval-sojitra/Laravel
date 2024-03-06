<?php

namespace App\Http\Controllers;

use App\Models\Myblog;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('user.home');

    }
    public function add(){
        return view('user.add');
    }

    public function show(){
        $myposts = Myblog::get();
        return view('user.show',compact('myposts'));
    }
    public function delete($id){
        $mypost = Myblog::find($id);
        $mypost->delete();
        echo "<script>alert('Post Removed')</script>";
        return redirect('show');
    }
    public function store(Request $request){
        $myblog = new Myblog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->content = $request->content;
        $myblog->save();
        echo "<script>alert('Post Added Successfully')</script>";
        return redirect('index');
    }
    public function edit($id){
        $mypost = Myblog::find($id);
        return view('user.edit',compact('mypost'));
    }
    public function update(Request $request,$id) {
        $myblog = Myblog::find($id);
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->content = $request->content;
        $myblog->save();
        return redirect('show');
    }
}

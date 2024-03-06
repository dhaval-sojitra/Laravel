<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mybolog;

class MyController extends Controller
{
    public function index(){
        return view('Templates.Index');
    }
    public function addpost(){
        return view('Client.Addpost');
    }
    public function store(Request $request){
        $myblog = new Mybolog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->content = $request->content;
        $myblog->save();
    }
}

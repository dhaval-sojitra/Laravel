<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MyModelController extends Controller
{
    public function index(){
        return view('layout');
    }
    public function home(){
        return view('home');
    }
    public function addstudent(){
        return view('addstudent');
    }
    public function store(Request $request){
        $request->validate([
            'studentid' => 'required | numeric',
            'firstname' => 'required | alpha',
            'lastname' => 'required | alpha',
            'age' => 'required | size:2 | numeric ',
            'dob' => 'required | date',
            'email' => 'required | email',
            'phonenumber' => 'required | numeric',
            'address' => 'required',
            'pincode' => 'required|size:5|integer ',
        ]);
        return $request->all();
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController as MyController;



Route::get('/',[Mycontroller::class,'index']);
Route::get('/addpost',[MyController::class,'addpost']);
Route::post('/store',[MyController::class,'store'])->name('Store');

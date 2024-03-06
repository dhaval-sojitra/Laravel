<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController as MyController;


Route::get('/index',[MyController::class,'index']);
Route::get('/add',[MyController::class,'add']);
Route::get('/show',[MyController::class,'show']);
Route::delete('/delete/{id}',[MyController::class,'delete'])->name('delete');
Route::post('/store',[MyController::class,'store']);
Route::get('/edit/{id}',[MyController::class,'edit'])->name('edit');
Route::put('/update/{id}',[MyController::class,'update'])->name('update');

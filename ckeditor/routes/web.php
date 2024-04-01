<?php

use App\Http\Controllers\myController;
use Illuminate\Support\Facades\Route;


Route::get('/index',[myController::class,'index'])->name('index');
Route::get('/show/{id}',[myController::class,'show'])->name('show');
Route::get('/create',[myController::class,'create'])->name('create');
Route::get('/home',[myController::class, 'home']) ->name('home');
Route::post('/store',[myController::class,'store'])->name('store');
Route::post('/comment/{id}',[myController::class,'comment'])->name('comment');
Route::delete('/delete/{id}',[myController::class,'delete'])->name('delete');

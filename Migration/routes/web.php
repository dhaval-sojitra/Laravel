<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index',[StudentsController::class,'index'])->name('index');
Route::get('/adduser',[StudentsController::class,'adduser'])->name('adduser');
Route::get('/user',[StudentsController::class,'user'])->name('user');
Route::post('/multiuser',[StudentsController::class,'multiuser'])->name('multiuser');
Route::get('/student',[StudentsController::class,'student'])->name('student');
Route::get('/department',[StudentsController::class,'department'])->name('department');
Route::get('/programs',[StudentsController::class,'programs'])->name('programs');
Route::get('/show',[StudentsController::class,'show'])->name('show');
Route::get('/update/{id}',[StudentsController::class,'update'])->name('update');
Route::put('/edit/{id}',[StudentsController::class,'edit'])->name('edit');

Route::delete('/destroy/{id}',[StudentsController::class,'destroy'])->name('destroy');
Route::post('/create',[StudentsController::class,'create'])->name('create');
Route::post('/addprogram',[StudentsController::class,'addprogram'])->name('addprogram');
Route::post('/addstudent',[StudentsController::class,'addstudent'])->name('addstudent');

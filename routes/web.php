<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'login']);

Route::post('/login/{username}/{password}',[LoginController::class,'checkpsw']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/userlist',[ReadController::class,'showall']);

Route::get('/adduser',function(){
    return view('adduser');
});
Route::post('/create',[CreateController::class,'create']);

Route::get('/update/{id}',[UpdateController::class,'update']);
Route::post('/update/{id}',[UpdateController::class,'updatedata']);

Route::get('/delete/{id}',[DeleteController::class,'delete']);



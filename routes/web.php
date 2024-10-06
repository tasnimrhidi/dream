<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

Route::get('/', function () {
    return view('layout/header');
});
Route::view('/dashboard','layout/dashboard')->name('dashboard');


Route::get("/login",[NewController::class,"login"])->name('login-page');
Route::post("/login",[NewController::class,"loginPost"])->name('login.post');
Route::get("/register",[NewController::class,"register"])->name('register-page');
Route::post("/register",[NewController::class,"registerPost"])->name('register.post');
Route::get("/logout",[NewController::class,"logout"])->name('logout');
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('user.login');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('user.signup');
Route::post('/sign-up/store/', [AuthController::class, 'signupStore'])->name('user.signup.store');
Route::post('/login/store/', [AuthController::class, 'loginStore'])->name('user.login.store');

Route::get('/home', function(){
    return view('index');
})->name('home');

Route::get('/test', function(){
    return view('index');
});


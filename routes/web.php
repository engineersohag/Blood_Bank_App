<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('user.login');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('user.signup');
Route::post('/sign-up/store/', [AuthController::class, 'signupStore'])->name('user.signup.store');
Route::post('/login/store/', [AuthController::class, 'loginStore'])->name('user.login.store');

Route::middleware('userAccess')->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
});



Route::get('/test', function(){
    return view('index');
});


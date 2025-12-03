<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('user.login');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('user.signup');

Route::get('/test', function(){
    return view('layouts.auth');
});
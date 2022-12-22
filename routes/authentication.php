<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Only if user is not logged in
Route::middleware(['guest'])->group(function () {

    Route::get('/', function() {
        if (Auth::user()) return redirect()->route('dashboard');
        else return view('auth.login');
    })->name('login');

    Route::post('/', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', function() {
        return view('auth.register');
    })->name('register');

    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

});
Route::middleware(['auth'])->group(function() {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

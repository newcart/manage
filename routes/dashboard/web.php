<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('panel');
    Route::name('panel.')->group(function() {
        include 'users/web.php';
        include 'products.php';
    });
});

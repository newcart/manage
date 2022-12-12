<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], routes: function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('panel');
    Route::name('dashboard.')->group(callback: function() {
        include 'users/web.php';
        include 'products/web.php';
        include 'orders/web.php';
    });
});

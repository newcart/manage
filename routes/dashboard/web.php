<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], routes: function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::name('dashboard.')->group(callback: function() {
        include 'users/web.php';
        include 'products/web.php';
        include 'orders/web.php';
        include 'campaign/web.php';
        include 'cargo/web.php';
        include "content/web.php";
        include "franchise/web.php";
        include "payment/web.php";
        include "settings/web.php";
    });
});

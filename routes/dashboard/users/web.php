<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::name('users.')->group(function () {

        Route::get('/create', [UserController::class, 'create'])->name('new');
        Route::post('/create', [UserController::class, 'store'])->name('create');

        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}/update', [UserController::class, 'update'])->name('update');

        Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'usersTable'])->name('table');


        include 'user_type.php';
        include 'services.php';
        include 'roles.php';
    });
});

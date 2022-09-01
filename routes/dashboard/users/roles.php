<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\User\RoleController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'roles'], function () {
    // Listing of roles
    Route::get('/', [RoleController::class, 'index'])->name('roles');

    // CRUD routes for roles
    Route::name('roles.')->group(function () {

        Route::get('/create', [RoleController::class, 'create'])->name('new');
        Route::post('/create', [RoleController::class, 'store'])->name('create');

        Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('edit');
        Route::put('/{role}/update', [RoleController::class, 'update'])->name('update');

        Route::delete('/{role}/delete', [RoleController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'rolesTable'])->name('table');
    });
});

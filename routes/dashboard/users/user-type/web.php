<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\User\UserType\UserTypeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'types'], function () {
    // Listing of types
    Route::get('/', [UserTypeController::class, 'index'])->name('types');

    // CRUD routes for types
    Route::name('types.')->group(function () {

        Route::get('/create', [UserTypeController::class, 'create'])->name('new');
        Route::post('/create', [UserTypeController::class, 'store'])->name('create');

        Route::get('/{type}/edit', [UserTypeController::class, 'edit'])->name('edit');
        Route::put('/{type}/update', [UserTypeController::class, 'update'])->name('update');

        Route::delete('/{type}/delete', [UserTypeController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'typesTable'])->name('table');
    });
});

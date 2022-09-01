<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\User\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'services'], function () {
    // Listing of services
    Route::get('/', [ServiceController::class, 'index'])->name('services');

    // CRUD routes for services
    Route::name('services.')->group(function () {

        Route::get('/create', [ServiceController::class, 'create'])->name('new');
        Route::post('/create', [ServiceController::class, 'store'])->name('create');

        Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('edit');
        Route::put('/{service}/update', [ServiceController::class, 'update'])->name('update');

        Route::delete('/{service}/delete', [ServiceController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'servicesTable'])->name('table');
    });
});

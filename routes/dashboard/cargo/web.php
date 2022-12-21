<?php

use App\Http\Controllers\Dashboard\Cargo\CargoController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'cargo'], function () {

    Route::get('/', [CargoController::class, 'index'])->name('cargo');

    Route::group(['name' => 'cargo.'], function () {

        Route::get('/create', [CargoController::class, 'create'])->name('create');
        Route::post('/store', [CargoController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [CargoController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [CargoController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [CargoController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'cargoTable'])->name('table');

        include "shipment_settings/web.php";
    });
});

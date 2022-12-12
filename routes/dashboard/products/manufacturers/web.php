<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Integration\Manufacturer\ManufacturerController;

Route::prefix('manufacturers')->group(callback: function () {

    Route::get('/', [ManufacturerController::class, 'index'])->name('manufacturers');

    Route::name('manufacturers.')->group(callback: function () {

        Route::get('/create', [ManufacturerController::class, 'create'])->name('create');
        Route::post('/store', [ManufacturerController::class, 'store'])->name('store');

        Route::get('/{manufacturer}/edit', [ManufacturerController::class, 'edit'])->name('edit');
        Route::put('/{manufacturer}/update', [ManufacturerController::class, 'update'])->name('update');

        Route::delete('/{manufacturer}/delete', [ManufacturerController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'manufacturerTable'])->name('table');
    });
});

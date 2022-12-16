<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Integration\Manufacturer\ManufacturerController;
use App\Http\Controllers\Dashboard\Product\Provider\ProviderController;

Route::prefix('providers')->group(callback: function () {

    Route::get('/', [ProviderController::class, 'index'])->name('providers');

    Route::name('providers.')->group(callback: function () {

        Route::get('/create', [ProviderController::class, 'create'])->name('create');
        Route::post('/store', [ProviderController::class, 'store'])->name('store');

        Route::get('/{manufacturer}/edit', [ProviderController::class, 'edit'])->name('edit');
        Route::put('/{manufacturer}/update', [ProviderController::class, 'update'])->name('update');

        Route::delete('/{manufacturer}/delete', [ProviderController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'manufacturerTable'])->name('table');
    });
});

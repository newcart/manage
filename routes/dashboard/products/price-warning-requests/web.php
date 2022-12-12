<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\PriceWarningRequests\PriceWarningRequestController;

Route::prefix('price-warning-requests')->group(function () {

    Route::get('/', [PriceWarningRequestController::class, 'index'])->name('price-warning-requests');

    Route::name('price-warning-requests.')->group(function () {

        Route::get('/create', [PriceWarningRequestController::class, 'create'])->name('create');
        Route::post('/store', [PriceWarningRequestController::class, 'store'])->name('store');

        Route::get('/{id}/edit',[PriceWarningRequestController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [PriceWarningRequestController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [PriceWarningRequestController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'priceAlertRequestsTable'])->name('table');
    });

});

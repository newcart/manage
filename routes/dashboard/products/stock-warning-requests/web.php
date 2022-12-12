<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\StockWarningRequest\StockWarningRequestController;

Route::prefix('stock-warning-requests')->group(callback: function () {

    Route::get('/', [StockWarningRequestController::class, 'index'])->name('stock-warning-requests');

    Route::name('stock-warning-requests.')->group(callback: function () {

        Route::get('/create', [StockWarningRequestController::class, 'create'])->name('create');
        Route::post('/store', [StockWarningRequestController::class, 'store'])->name('store');

        Route::get('/{id}/edit',[StockWarningRequestController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [StockWarningRequestController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [StockWarningRequestController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'stockAlertRequestsTable'])->name('table');
    });

});

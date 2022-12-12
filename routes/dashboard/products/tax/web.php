<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\Tax\TaxController;

Route::group(['prefix' => 'tax'], routes: function () {

    Route::get('/', [TaxController::class, 'index'])->name('tax');

    Route::name('tax.')->group(callback: function () {

        Route::get('/create', [TaxController::class, 'create'])->name('create');
        Route::post('/store', [TaxController::class, 'store'])->name('store');

        Route::get('/{tax}/edit', [TaxController::class, 'edit'])->name('edit');
        Route::put('/{tax}/update', [TaxController::class, 'update'])->name('update');

        Route::delete('/{tax}/delete', [TaxController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'taxTable'])->name('table');

    });

});

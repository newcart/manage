<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Payment\VirtualPOS\VirtualPOSController;

Route::group(['prefix' => 'virtual-pos'], function () {

    Route::get('/', [VirtualPOSController::class, 'index'])->name('virtual-pos');

    Route::name('virtual-pos.')->group(function () {

        Route::get('/create', [VirtualPOSController::class, 'create'])->name('create');
        Route::post('/store', [VirtualPOSController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [VirtualPOSController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [VirtualPOSController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [VirtualPOSController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'virtualPOSTable'])->name('table');

    });
});

<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Payment\MobilePayment\MobilePaymentController;

Route::group(['prefix' => 'mobile-payment'], function () {

    Route::get('/', [MobilePaymentController::class, 'index'])->name('mobile-payment');

    Route::name('mobile-payment.')->group(function () {

        Route::get('/create', [MobilePaymentController::class, 'create'])->name('create');
        Route::post('/store', [MobilePaymentController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [MobilePaymentController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [MobilePaymentController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [MobilePaymentController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'mobilePaymentTable'])->name('table');

    });

});

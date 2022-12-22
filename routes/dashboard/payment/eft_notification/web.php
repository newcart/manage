<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Payment\EFTNotification\EFTNotificationController;

Route::group(['prefix' => 'eft-notification'], function () {

    Route::get('/', [EFTNotificationController::class, 'index'])->name('eft-notification');

    Route::name('eft-notification.')->group(function () {

        Route::get('/create', [EFTNotificationController::class, 'create'])->name('create');
        Route::post('/store', [EFTNotificationController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [EFTNotificationController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [EFTNotificationController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [EFTNotificationController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'eftNotificationTable'])->name('table');
    });

});

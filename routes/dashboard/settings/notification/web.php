<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Setting\Notification\NotificationController;

Route::group(['prefix' => 'notification-settings'], function () {

    Route::get('/', [NotificationController::class, 'index'])->name('notification-settings');

    Route::name('notification-settings.')->group(function () {

        Route::get('/create', [NotificationController::class, 'create'])->name('create');
        Route::post('/store', [NotificationController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [NotificationController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [NotificationController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [NotificationController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'notificationTable'])->name('table');

    });

});

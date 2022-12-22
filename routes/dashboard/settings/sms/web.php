<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Setting\SMS\SMSController;

Route::group(['prefix' => 'sms-settings'], function () {

    Route::get('/', [SMSController::class, 'index'])->name('sms-settings');

    Route::name('sms.')->group(function () {

        Route::get('/create', [SMSController::class, 'create'])->name('create');
        Route::post('/store', [SMSController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [SMSController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [SMSController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [SMSController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'smsTable'])->name('table');

    });

});

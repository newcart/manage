<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Setting\Email\EmailController;

Route::group(['prefix' => 'email-settings'], function () {

    Route::get('/', [EmailController::class, 'index'])->name('email-settings');

    Route::name('email-settings.')->group(function () {

        Route::get('/create', [EmailController::class, 'create'])->name('create');
        Route::post('/store', [EmailController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [EmailController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [EmailController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [EmailController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'emailTable'])->name('table');

    });

});

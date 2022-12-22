<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Payment\EFT\EFTController;

Route::group(['prefix' => 'eft'], function () {

    Route::get('/', [EFTController::class, 'index'])->name('eft');

    Route::name('eft.')->group(function () {

        Route::get('/create',[EFTController::class, 'create'])->name('create');
        Route::post('/store', [EFTController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [EFTController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [EFTController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [EFTController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'eftTable'])->name('table');

    });

});

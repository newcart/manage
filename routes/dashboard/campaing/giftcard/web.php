<?php

use App\Http\Controllers\Dashboard\Campaign\Giftcard\GiftcardController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::prefix('giftcard')->group(function () {

    Route::get('/', [GiftcardController::class, 'index'])->name('giftcard');

    Route::name('giftcard.')->group(function () {

        Route::get('/create', [GiftcardController::class, 'create'])->name('create');
        Route::post('/store', [GiftcardController::class, 'store'])->name('store');

        Route::get('/{giftcard}/edit', [GiftcardController::class, 'edit'])->name('edit');
        Route::patch('/{giftcard}/update', [GiftcardController::class, 'update'])->name('update');

        Route::delete('/{giftcard}/delete', [GiftcardController::class, 'destroy'])->name('delete');;

        Route::get('/table', [DatatableController::class, 'giftcardTable'])->name('table');
    });
});

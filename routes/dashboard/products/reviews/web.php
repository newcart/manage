<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\Reviews\ReviewController;

Route::prefix('reviews')->group(callback: function () {

    Route::get('/', [ReviewController::class, 'index'])->name('reviews');

    Route::name('reviews.')->group(callback: function () {

        Route::get('/create', [ReviewController::class, 'create'])->name('create');
        Route::post('/store', [ReviewController::class, 'store'])->name('store');

        Route::get('/{review}/edit', [ReviewController::class, 'edit'])->name('edit');
        Route::put('/{review}/update', [ReviewController::class, 'update'])->name('update');

        Route::delete('/{review}/delete', [ReviewController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'reviewTable'])->name('table');
    });
});

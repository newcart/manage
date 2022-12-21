<?php

use App\Http\Controllers\Dashboard\Campaign\Slide\SlideController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::prefix('slide')->group(function () {

    Route::get('/', [SlideController::class, 'index'])->name('.slide');

    Route::name('.slide.')->group(function () {

        Route::get('/create', [SlideController::class, 'create'])->name('create');
        Route::post('/store', [SlideController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [SlideController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [SlideController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [SlideController::class, 'destroy'])->name('delete');;

        Route::get('/table', [DatatableController::class, 'slideTable'])->name('table');
    });
});

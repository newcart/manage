<?php


use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\Color\ColorController;

Route::group(['prefix' => 'colors'], routes: function () {

    Route::get('/', [ColorController::class, 'index'])->name('colors');

    Route::name('colors')->group(callback: function () {

        Route::get('/create', [ColorController::class, 'create'])->name('create');
        Route::post('/store', [ColorController::class, 'store'])->name('store');

        Route::get('/{color}/edit', [ColorController::class, 'edit'])->name('edit');
        Route::put('/{color}/update', [ColorController::class, 'update'])->name('update');

        Route::delete('/{color}/delete', [ColorController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'colorsTable'])->name('table');

    });

});

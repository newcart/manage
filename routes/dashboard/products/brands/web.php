<?php

use App\Http\Controllers\Dashboard\Product\Brand\BrandController;

Route::group(['prefix' => 'brands'], function () {

    Route::get('/', [BrandController::class, 'index'])->name('brands');

    Route::name('brands.')->group(function () {

        Route::get('/create', [BrandController::class, 'create'])->name('create');
        Route::post('/store', [BrandController::class, 'store'])->name('store');

        Route::get('/{brand}/edit', [BrandController::class, 'edit'])->name('edit');
        Route::post('/{brand}/update', [BrandController::class, 'update'])->name('update');

        Route::delete('/{brand}/delete', [BrandController::class, 'destroy'])->name('delete');

        Route::get('/table', [BrandController::class, 'brandsTable'])->name('table');

    });

});

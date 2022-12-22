<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Setting\SEO\SEOController;

Route::group(['prefix' => 'seo-settings'], function () {

    Route::get('/', [SEOController::class, 'index'])->name('seo-settings');

    Route::name('seo.')->group(function () {

        Route::get('/create', [SEOController::class, 'create'])->name('create');
        Route::post('/store', [SEOController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [SEOController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [SEOController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [SEOController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'seoTable'])->name('table');

    });

});

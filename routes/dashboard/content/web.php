<?php

use App\Http\Controllers\Dashboard\Content\ContentControler;
use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'content'], function () {

    Route::get('/', [ContentControler::class, 'index'])->name('content');

    Route::group(['name' => 'content.'], function () {

        Route::get('/create', [ContentControler::class, 'create'])->name('create');
        Route::post('/store', [ContentControler::class, 'store'])->name('store');

        Route::get('/{id}/edit', [ContentControler::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [ContentControler::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [ContentControler::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'contentTable'])->name('table');
    });
});

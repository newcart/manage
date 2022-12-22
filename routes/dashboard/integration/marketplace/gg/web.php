<?php

use App\Http\Controllers\Dashboard\Integration\Marketplace\GG\GittiGidiyorController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'gittigidiyor'], function () {

    Route::get('/', [GittiGidiyorController::class, 'index'])->name('gittigidiyor');

    Route::name('gittigidiyor.')->group(function () {

        Route::get('/create', [GittiGidiyorController::class, 'create'])->name('create');
        Route::post('/store', [GittiGidiyorController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [GittiGidiyorController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [GittiGidiyorController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [GittiGidiyorController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'gittigidiyorTable'])->name('table');
    });
});

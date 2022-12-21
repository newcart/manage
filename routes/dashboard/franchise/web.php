<?php

use App\Http\Controllers\Dashboard\Franchise\FranchiseController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'franchise'], function () {

    Route::get('/', [FranchiseController::class, 'index'])->name('franchise');

    Route::group(['name' => 'franchise.'], function () {

        Route::get('/create', [FranchiseController::class, 'create'])->name('create');
        Route::post('/store', [FranchiseController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [FranchiseController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [FranchiseController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [FranchiseController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'franchisesTable'])->name('table');
    });
});

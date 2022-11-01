<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories');
    Route::name('categories.')->group(function () {

        Route::get('/create', [CategoryController::class, 'create'])->name('new');
        Route::post('/create', [CategoryController::class, 'store'])->name('create');

        Route::get('/{order}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{order}/update', [CategoryController::class, 'update'])->name('update');

        Route::delete('/{order}/delete', [CategoryController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'categoriesTable'])->name('table');
    });
});

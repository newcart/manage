<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::name('products.')->group(function () {

        // Create new product
        Route::get('/new', [ProductController::class, 'create'])->name('new');
        Route::post('/create', [ProductController::class, 'store'])->name('create');

        // Edit product
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');

        // Delete product
        Route::delete('/{product}/delete', [ProductController::class, 'destroy'])->name('delete');
        Route::get('/table', [DatatableController::class, 'productsTable'])->name('table');
    });
});

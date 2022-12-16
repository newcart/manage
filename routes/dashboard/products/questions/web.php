<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Product\Question\QuestionController;

Route::prefix('product-questions')->group(callback: function () {

    Route::get('/', [QuestionController::class, 'index'])->name('questions');

    Route::name('questions.')->group(callback: function () {

        Route::get('/create', [QuestionController::class, 'create'])->name('create');
        Route::post('/store', [QuestionController::class, 'store'])->name('store');

        Route::get('/{question}/edit', [QuestionController::class, 'edit'])->name('edit');
        Route::put('/{question}/update', [QuestionController::class, 'update'])->name('update');

        Route::delete('/{question}/delete', [QuestionController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'questionTable'])->name('table');
    });
});

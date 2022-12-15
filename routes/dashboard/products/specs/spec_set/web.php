<?php

use App\Http\Controllers\Dashboard\Product\Spec\SpecSet\SpecSetController;

Route::group(['prefix' => 'spec_sets'], function() {

    Route::name('spec_sets.')->group(function () {

        Route::get('/create', [SpecSetController::class, 'create'])->name('create');

        Route::put('/store', [SpecSetController::class, 'store'])->name('store');

        Route::get('/{spec_set}/edit', [SpecSetController::class, 'edit'])->name('edit');

        Route::patch('/{spec_set}/update', [SpecSetController::class, 'update'])->name('update');

    });
});

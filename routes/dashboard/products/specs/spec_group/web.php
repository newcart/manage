<?php

use App\Http\Controllers\Dashboard\Product\Spec\SpecGroup\SpecGroupController;

Route::group(['prefix' => 'spec_groups'], function() {

    Route::name('spec_groups.')->group(function () {

        Route::get('/create', [SpecGroupController::class, 'create'])->name('create');

        Route::post('/store', [SpecGroupController::class, 'store'])->name('store');

        Route::get('/{spec_set}/edit', [SpecGroupController::class, 'edit'])->name('edit');

        Route::patch('/store', [SpecGroupController::class, 'update'])->name('update');

    });
});

<?php

use App\Http\Controllers\Dashboard\Product\Unit\UnitController;

Route::group(['prefix' => 'units'], routes: function () {

    Route::get('/', [UnitController::class, 'index'])->name('units');

    Route::name('units.')->group(callback: function () {

        Route::get('/create', [UnitController::class, 'create'])->name('create');
        Route::post('/store', [UnitController::class, 'update'])->name('store');

        Route::get('/{unit}/edit', [UnitController::class, 'edit'])->name('edit');
        Route::put('/{unit}/update', [UnitController::class, 'update'])->name('update');

        Route::delete('/{unit}/delete', [UnitController::class, 'destroy'])->name('destroy');

        Route::get('/table', [UnitController::class, 'unitTable'])->name('table');

    });

});

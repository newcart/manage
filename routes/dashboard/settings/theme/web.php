<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Setting\Theme\ThemeController;

Route::group(['prefix' => 'theme'], routes: static function (): void {

    Route::get('/', [ThemeController::class, 'index'])->name('theme');

    Route::name('theme.')->group(function () {

        Route::get('/create', [ThemeController::class, 'create'])->name('create');
        Route::post('/store', [ThemeController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [ThemeController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [ThemeController::class, 'update'])->name('update');

        Route::delete('/{id}/delete',[ThemeController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'themeTable'])->name('table');

    });

});

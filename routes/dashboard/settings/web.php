<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Setting\General\GeneralController;

Route::group(['prefix' => 'settings'], function () {

    Route::get('/', [GeneralController::class, 'index'])->name('settings');

    Route::name('settings.')->group(function () {

        Route::get('/create', [GeneralController::class, 'create'])->name('create');
        Route::post('/store', [GeneralController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [GeneralController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [GeneralController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [GeneralController::class, 'destroy'])->name('destroy');

        Route::get('/table', [DatatableController::class, 'settingsTable'])->name('table');

        include "email/web.php";

        include "notification/web.php";

        include "seo/web.php";

        include "sms/web.php";

        include "receipt/web.php";

        include "theme/web.php";
    });

});

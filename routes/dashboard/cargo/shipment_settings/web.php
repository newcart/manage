<?php

use App\Http\Controllers\Dashboard\Cargo\ShipmentSettings\ShipmentSettingsController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'shipment-settings'], function () {

    Route::get('/', [ShipmentSettingsController::class, 'index'])->name('shipment-settings');

    Route::group(['name' => 'shipment-settings.'], function () {

        Route::get('/create', [ShipmentSettingsController::class, 'create'])->name('create');
        Route::post('/store', [ShipmentSettingsController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [ShipmentSettingsController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [ShipmentSettingsController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [ShipmentSettingsController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'shipmentSettingsTable'])->name('table');
    });
});

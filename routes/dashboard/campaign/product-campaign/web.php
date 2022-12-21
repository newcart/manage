<?php

use App\Http\Controllers\Dashboard\Campaign\ProductCampaign\ProductCampaignController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::prefix('product-campaign')->group(function () {

    Route::get('/', [ProductCampaignController::class, 'index'])->name('product_campaign');

    Route::name('.product_campaign.')->group(function () {

        Route::get('/create', [ProductCampaignController::class, 'create'])->name('create');
        Route::post('/store', [ProductCampaignController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [ProductCampaignController::class, 'edit'])->name('edit');
        Route::patch('/{id}/update', [ProductCampaignController::class, 'update'])->name('update');

        Route::delete('/{id}/delete', [ProductCampaignController::class, 'destroy'])->name('delete');;

        Route::get('/table', [DatatableController::class, 'productCampaignTable'])->name('table');
    });
});

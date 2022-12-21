<?php

use App\Http\Controllers\Dashboard\Franchise\FranchiseController;
use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'integration'], function () {

    Route::get('/', [FranchiseController::class, 'index'])->name('franchise');


});

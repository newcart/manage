<?php

use App\Http\Controllers\Dashboard\DatatableController;
use App\Http\Controllers\Dashboard\Order\OrderController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'orders'], static function () {
    Route::get('/', [OrderController::class, 'index'])->name('orders');
    Route::name('orders.')->group(static function () {

        Route::get('/create', [OrderController::class, 'create'])->name('new');
        Route::post('/create', [OrderController::class, 'store'])->name('create');

        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::put('/{order}/update', [OrderController::class, 'update'])->name('update');

        Route::delete('/{order}/delete', [OrderController::class, 'destroy'])->name('delete');

        Route::get('/table', [DatatableController::class, 'ordersTable'])->name('table');
    });
});

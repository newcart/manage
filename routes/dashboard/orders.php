<?php

use App\Helpers\Components;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'orders'], function () {
    Route::get('/', function() {
        $data = [
            'sidebar' => Components::SideBar('dashboard/products', 'admin'),
            'navbar' => Components::Navbar()
        ];
        return view('dashboard.orders.index', $data);
    })->name('orders');
});

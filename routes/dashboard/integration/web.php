<?php

use App\Http\Controllers\Dashboard\DatatableController;

Route::group(['prefix' => 'integration'], function () {

    Route::get('/', function () {
        return redirect()->back();
    });


    Route::name('integration.')->group(function () {

        include "marketplace/web.php";

    });

});

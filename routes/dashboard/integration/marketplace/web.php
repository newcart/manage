<?php

Route::group(['prefix' => 'marketplace'], function () {

    Route::get('/', static function () {
        return redirect()->back();
    });

    Route::name('marketplace.')->group(function () {

        include "gg/web.php";

        include "n11/web.php";

    });
});

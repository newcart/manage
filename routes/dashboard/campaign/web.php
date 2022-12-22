<?php

Route::group(['prefix' => 'campaigns'], function () {

    Route::get('/', static function () {
        return redirect()->back();
    });

    Route::name('campaigns.')->group(function () {
        include "giftcard/web.php";
        include "product-campaign/web.php";
        include "slide/web.php";
    });
});

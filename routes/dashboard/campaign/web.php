<?php

Route::group(['prefix' => 'campaigns', 'name' => 'campaigns'], function () {

    Route::get('/', static function () {
        return redirect()->back();
    });

    include "giftcard/web.php";
    include "product-campaign/web.php";
    include "slide/web.php";
});

<?php

Route::group(['prefix' => 'payment'], function () {

    Route::get('/', function () {
        return redirect()->back();
    });

    Route::name('payment.')->group(function () {

        include "eft/web.php";

        include "eft_notification/web.php";

        include "mobile_payment/web.php";

        include "virtual_pos/web.php";

    });
});

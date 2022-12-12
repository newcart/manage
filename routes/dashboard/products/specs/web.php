<?php

Route::group(['prefix' => 'specs'], function (){

    Route::get('/', fn() => view('dashboard.specs.index'))->name('specs');

   Route::name('specs.')->group(function() {

       include 'spec_group/web.php';

       include 'spec_set/web.php';

   });

});

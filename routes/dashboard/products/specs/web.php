<?php

use App\Http\Controllers\Dashboard\Product\Spec\SpecGroup\SpecGroupController;

Route::group(['prefix' => 'specs'], function (){

    Route::get('/', [SpecGroupController::class, 'index'])->name('specs');

   Route::name('specs.')->group(function() {

       include 'spec_group/web.php';

       include 'spec_set/web.php';

   });

});

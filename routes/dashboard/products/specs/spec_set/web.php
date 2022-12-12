<?php

Route::group(['prefix' => 'spec_sets'], function() {

    Route::name('spec_sets.')->group(function () {

        Route::get('/create', fn() => view('dashboard.specs.set.index'))->name('create');

        Route::get('/{spec_set}/edit', fn() => view('dashboard.specs.set.edit'))->name('edit');

    });
});

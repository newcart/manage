<?php

Route::group(['prefix' => 'spec_groups'], function() {

    Route::name('spec_groups.')->group(function () {

        Route::get('/create', fn() => view('dashboard.groups.set.index'))->name('create');

        Route::get('/{spec_set}/edit', fn() => view('dashboard.groups.set.edit'))->name('edit');

    });
});

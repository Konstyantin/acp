<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('contact', 'ContactController')->except(['show']);

Route::group(['prefix' => 'group'], function () {
    Route::get('/', 'GroupController@index');

    Route::get('/create', 'GroupController@create');

    Route::get('/edit/{id}', 'GroupController@edit');

    Route::get('/view/{id}', 'GroupController@show');
});

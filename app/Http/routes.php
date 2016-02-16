<?php

// the admin routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {

	Route::resource('biblios', 'BibliosController');

	Route::resource('users', 'UserController');

});

// the authenticated user routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

	Route::get('/', 'BibliosController@index');

	Route::get('marcfields/{marcfields}/delete/{submarcfields}',array('uses' => 'MarcfieldController@destroyMarcsubfield', 'as' => 'admin.marcfields.destroyMarcsubfield'));

	Route::get('biblios/{biblios}/change',array('uses' => 'BibliosController@change', 'as' => 'admin.biblios.change'));

	Route::get('itemtypes/{itemtypes}/change',array('uses' => 'ItemtypeController@change', 'as' => 'admin.itemtypes.change'));

	Route::resource('itemtypes', 'ItemtypeController');

	Route::resource('marcfields', 'MarcfieldController');

	Route::resource('records', 'RecordController');

});

// the guest routes
Route::group(['middleware' => 'web'], function () {

    Route::auth();

	Route::get('advanced-search', 'HomeController@advancedSearch');

    Route::get('/', 'HomeController@index');

    Route::get('search', 'SearchController@search');

    Route::get('advanced-results', 'SearchController@searchAdvanced');

    Route::get('detail/{id}', 'SearchController@showRecordsDetails');

});
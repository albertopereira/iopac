<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

// the admin routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {

    Route::resource('biblios', 'BibliosController', ['as' => 'admin']);

    Route::resource('users', 'UserController', ['as' => 'admin']);

});

// the authenticated user routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

    Route::get('/', 'BibliosController@index');

    Route::get('marcfields/{marcfields}/delete/{submarcfields}',array('uses' => 'MarcfieldController@destroyMarcsubfield', 'as' => 'admin.marcfields.destroyMarcsubfield'));

    Route::get('biblios/{biblios}/change',array('uses' => 'BibliosController@change', 'as' => 'admin.biblios.change'));

    Route::get('itemtypes/{itemtypes}/change',array('uses' => 'ItemtypeController@change', 'as' => 'admin.itemtypes.change'));

    Route::resource('itemtypes', 'ItemtypeController', ['as' => 'admin']);

    Route::resource('marcfields', 'MarcfieldController', ['as' => 'admin']);

    Route::resource('records', 'RecordController', ['as' => 'admin']);

});

// the guest routes
Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('advanced-search', 'HomeController@advancedSearch');

    Route::get('/', 'HomeController@index');
    
    Route::get('/requisitions', 'RequisitionsController@index');

    Route::get('search', 'SearchController@search');

    Route::get('advanced-results', 'SearchController@searchAdvanced');

    Route::get('detail/{id}', 'SearchController@showRecordsDetails');

});
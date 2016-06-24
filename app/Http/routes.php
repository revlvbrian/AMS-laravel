<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::model('asset', 'App\Asset');

// CONNECTION
Route::get('conn', function () {
    return view('conn');
});

Route::get('lib', function () {
    return view('lib');
});

// HOME
Route::get('/', 'PagesController@home');

// PAGES
Route::get('add-asset', 'PagesController@addasset');

Route::get('edit-asset', 'PagesController@editasset');

Route::get('view-asset', 'PagesController@viewasset');

// FUNCTION
Route::get('add', function () {
    return view('add-asset');
});

Route::get('delete', function () {
    return view('delete');
});

Route::get('update', function () {
    return view('update');
});



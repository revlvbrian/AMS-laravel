<?php

$router->bind('asset', function($id)
{
    return App\Asset::whereId($id)->first();
});

$router->bind('employee', function($id)
{
    return App\Employee::whereId($id)->first();
});

// HOME
Route::get('/', 'PagesController@home');

Route::get('index', 'PagesController@home');

// PAGES

    // ASSET

    Route::get('add-asset', 'PagesController@addasset');

    Route::get('view-asset', 'PagesController@viewasset');

    Route::get('edit-asset/{id}', 'PagesController@editasset');

    // EMPLOYEE

    Route::get('add-employee', 'PagesController@addemployee');

    Route::get('view-employee', 'PagesController@viewemployee');

    Route::get('edit-employee/{id}', 'PagesController@editemployee');

// FUNCTION
    //ASSET
    Route::patch('updateAsset/{id}', 'PagesController@updateAsset');

    Route::get('deleteAsset/{id}', 'PagesController@deleteAsset');

    Route::post('storeAsset', 'PagesController@storeAsset');

    //EMPLOYEE
    Route::patch('updateEmployee/{id}', 'PagesController@updateEmployee');

    Route::get('deleteEmployee/{id}', 'PagesController@deleteEmployee');

    Route::post('storeEmployee', 'PagesController@storeEmployee');





<?php

// Mengimpor kelas Route
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'HomePageController@index');
Route::get('/listing', 'ListingPageController@index');
Route::get('/details', 'DetailsPageController@index');

Route::get('/master', ['uses' => 'MasterController@master', 'as' => 'master']);

Route::group(['prefix' => 'back', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/category', 'Admin\CategoryController@index');
    Route::get('/category/create', 'Admin\CategoryController@create');
    Route::get('/category/edit', 'Admin\CategoryController@edit');
    Route::get('/permission', 'Admin\PermissionController@index');
    Route::get('/permission/create', 'Admin\PermissionController@create');
    Route::post('/permission/store', 'Admin\PermissionController@store');
    Route::get('/permission/edit/{id}', ['uses' => 'Admin\PermissionController@edit', 'as' => 'permission.edit']);
    Route::put('/permission/edit{id}', ['uses' => 'Admin\PermissionController@update', 'as' => 'permission-update']);
    Route::delete('/permission/delete{id}', ['uses' => 'Admin\PermissionController@destroy', 'as' => 'permission-delete']);

    Route::get('/roles', 'Admin\RoleController@index');
    Route::get('/roles/create', 'Admin\RoleController@create');
    Route::post('/roles/store', 'Admin\RoleController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

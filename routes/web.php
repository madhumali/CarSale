<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Page'],function(){
    Route::get('/','PageController@index')->name('main');
    Route::get('cars/{cars?}','PageController@cars')->name('cars');
    Route::get('cars/tags/{tags}','PageController@tag')->name('tags');
    Route::get('cars/categories/{categories}','PageController@category')->name('categories');
    Route::resource('/contact','ContactController');
    Route::get('/search', 'PageController@search')->name('search');
    Route::get('/recent','PageController@recent')->name('recent');
});

Route::group(['namespace' => 'Admin' ,'middleware' => ['admin']],function(){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resource('/admin/cars','CarsController');
    Route::resource('/admin/tag','TagController');
    Route::resource('/admin/category','CategoryController');
    Route::resource('/admin/message','MessageController');
    //
    Route::resource('/admin/user','UserController');
    Route::resource('/admin/role','RoleController');
    Route::resource('/admin/permission','PermissionController');
});


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

     Route::get('/home', 'HomeController@index')->name('home');


});

Route::get('testrides', 'TestrideController@index')->name('testrides.index');
Route::post('testrides', 'TestrideController@addTestride')->name('testrides.add');


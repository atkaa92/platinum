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
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/sentMail', 'MainController@sentMail');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', 'MainController@index');
        Route::get('/inner', 'MainController@inner');
        Route::get('/shop', 'MainController@shop');
    }
);

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
    'namespace' => 'Admin'
], function (){
    Route::get('/', 'DashboardController@index');
    Route::get('/about/{id}', 'DashboardController@getAbout');
    Route::post('/about/{id}', 'DashboardController@updateAbout');
    Route::get('/config', 'DashboardController@getConfigs');

    Route::post('/task/{id?}', 'TaskController@addTask');
    Route::get('/task/{id?}', 'TaskController@deleteTask');
    Route::post('/update/task', 'TaskController@updateTask');

    Route::get('/new-product', 'ProductController@addProduct');
    Route::get('/all-products', 'ProductController@allProducts');

    Route::get('/manifactures', 'ProductController@getManufactures');
    Route::post('/save-manufactures', 'ProductController@saveManufactures');
    Route::get('/remove-manufacture/{manufacture_id}', 'ProductController@removeManufacturerById');

    Route::get('/service/{id}', 'ServiceController@getService');
    Route::post('/service/{id}', 'ServiceController@updateService');
});


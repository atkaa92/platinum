<?php
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/sentMail', 'MainController@sentMail');
Route::any('/filter/{make?}/{model?}/{yFrom?}/{yTo?}/{mech?}/{auto?}/{other?}/{fPrice?}/{tPrice?}', 'ShopController@filterProducts');

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
    Route::post('/config', 'DashboardController@updateConfigs');

    Route::post('/task/{id?}', 'TaskController@addTask');
    Route::get('/task/{id?}', 'TaskController@deleteTask');
    Route::post('/update/task', 'TaskController@updateTask');

    Route::get('/get-models/{id}', 'ProductController@getAllModelsByBrandId');
    Route::post('/add-new-model', 'ProductController@addNewModelByBrandId');

    Route::post('/add-new-product/{id?}', 'ProductController@addOrEditProductFunc');
    Route::get('/new-product', 'ProductController@addProduct');
    Route::get('/all-products', 'ProductController@allProducts');
    Route::get('/manifactures', 'ProductController@getManufactures');
    Route::post('/save-manufactures', 'ProductController@saveManufactures');
    Route::get('/remove-manufacture/{manufacture_id}', 'ProductController@removeManufacturerById');

    Route::get('/service/{id}', 'ServiceController@getService');
    Route::post('/service/{id}', 'ServiceController@updateService');
});


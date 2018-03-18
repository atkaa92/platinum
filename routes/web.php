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


Route::get('/', 'MainController@index');
Route::get('/inner', 'MainController@inner');
Route::get('/shop', 'MainController@shop');

Route::get('/ad', function (){
    return view('admin.index');
});



Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth',
    'namespace' => 'Admin'
], function (){
    Route::get('/', 'DashboardController@index');
});


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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->middleware('auth')->name('admin');

Route::get('/', 'HomeController@index');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', 'ServiceController');
    Route::resource('cars', 'CarController');
    Route::resource('workers', 'WorkerController');
    Route::resource('orders', 'OrderController');
    Route::resource('clients', 'ClientController');
});





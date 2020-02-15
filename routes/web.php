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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'FrontpageController@index')->name('frontend');
Route::get('/admin', 'AdminController@index');

Route::get('/admin/{banner}/edit', 'BannerController@edit');
Route::put('/admin/{banner}/update', 'BannerController@update');

Route::get('/admin/create', 'BannerController@create')->name('create');
Route::post('/admin/store', 'BannerController@store')->name('store');
Route::delete('/admin/{banner}', 'BannerController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

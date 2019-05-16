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

Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/store', 'HomeController@store')->name('home.store');
    Route::get('/remove/{id}', 'HomeController@destroy')->name('home.remove');

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Auth::routes();

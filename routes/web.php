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

Route::group(['middleware' => 'auth','role:Super Admin|Admin'], function () {
    Route::get('/', 'DeshboardController@index')->name('/');
    Route::get('menu/manage', 'MenuController@index')->name('manage-menu');
    Route::get('delete/menu/{id}', 'MenuController@deleteMenu')->name('delete-menu');
    Route::post('new-menu/add', 'MenuController@newMenuAdd')->name('add-new-menu');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

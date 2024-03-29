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

Route::get('task', 'TaskController@index');

Route::post('task', 'TaskController@create');

Route::delete('task/{id}', 'TaskController@delete')->name('task-delete');

Route::get('lang/{lang}', 'TaskController@changeLang')->name('lang');

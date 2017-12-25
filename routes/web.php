<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now cpreate something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', 'articleController@index')->name('articleIndex');
Route::get('/articles/create', 'articleController@create')->name('articleCreate');
Route::post('/articles/store', 'articleController@store')->name('articleStore');
Route::get('/articles/edit/{id}', 'articleController@edit')->name('articleEdit');
Route::patch('/articles/update/{id}', 'articleController@update')->name('articleUpdate');
Route::delete('/articles/delete', 'articleController@delete')->name('articleDelete');
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
Route::get('/courses', 'courseController@index')->name('courseIndex');
Route::get('/courses/create', 'courseController@create')->name('courseCreate');
Route::post('/courses/store', 'courseController@store')->name('courseStore');
Route::get('/courses/edit/{id}', 'courseController@edit')->name('courseEdit');
Route::patch('/courses/update/{id}', 'courseController@update')->name('courseUpdate');
Route::delete('/courses/delete', 'courseController@delete')->name('courseDelete');
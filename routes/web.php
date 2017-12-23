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

Route::resource('articles', 'articleController');

// Route::get('/articles', 'articleController@index')->name('articleIndex');
// Route::get('/articles/create', 'articleController@create')->name('articleCreate');
// Route::post('/articles/store', 'articleController@store')->name('articleStore');
// Route::put('/articles/update', 'articleController@update')->name('articleUpdate');
// Route::get('/articles/show', 'articleController@show')->name('articleShow');
// Route::delete('/articles/delete/{id}', 'articleController@delete')->name('articleDelete');



Route::get('/tutorials', 'tutorialController@index')->name('tutorialIndex');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

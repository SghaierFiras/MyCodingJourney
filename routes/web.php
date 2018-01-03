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

//COURSES
Route::get('/courses', 'courseController@index')->name('courseIndex');
Route::get('/courses/create', 'courseController@create')->name('courseCreate');
Route::post('/courses/store', 'courseController@store')->name('courseStore');
Route::get('/courses/edit/{id}', 'courseController@edit')->name('courseEdit');
Route::patch('/courses/update/{id}', 'courseController@update')->name('courseUpdate');
Route::delete('/courses/delete', 'courseController@delete')->name('courseDelete');

//ARTICLES
Route::get('/articles', 'articleController@index')->name('articleIndex');
Route::get('/articles/create', 'articleController@create')->name('articleCreate');
Route::post('/articles/store', 'articleController@store')->name('articleStore');
Route::get('/articles/edit/{id}', 'articleController@edit')->name('articleEdit');
Route::patch('/articles/update/{id}', 'articleController@update')->name('articleUpdate');
Route::delete('/articles/delete', 'articleController@delete')->name('articleDelete');

//TUTORIALS
Route::get('/tutorials', 'tutorialController@index')->name('tutorialIndex');
Route::get('/tutorials/create', 'tutorialController@create')->name('tutorialCreate');
Route::post('/tutorials/store', 'tutorialController@store')->name('tutorialsStore');
Route::get('/tutorials/edit/{id}', 'tutorialController@edit')->name('tutorialEdit');
Route::patch('/tutorials/update/{id}', 'tutorialController@update')->name('tutorialUpdate');
Route::delete('/tutorials/delete', 'tutorialController@delete')->name('tutorialDelete');

//AUTH
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

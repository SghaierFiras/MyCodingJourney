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

Route::get('/tutorials', 'tutorialController@index')->name('tutorialIndex');
<<<<<<< HEAD


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/tutorials/create', 'tutorialController@create')->name('tutorialCreate');
Route::post('/tutorials/store', 'tutorialController@store')->name('tutorialsStore');
Route::get('/tutorials/edit/{id}', 'tutorialController@edit')->name('tutorialEdit');
Route::patch('/tutorials/update/{id}', 'tutorialController@update')->name('tutorialUpdate');
Route::delete('/tutorials/delete', 'tutorialController@delete')->name('tutorialDelete');
>>>>>>> master

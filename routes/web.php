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
Route::get('/articles', 'articleController@index')->name('articleIndex');
Route::get('/tutorials', 'tutorialController@index')->name('tutorialIndex');


// Route::get('/courses', function ()
// {
//     $x=["one"=>["one_1"=>1,"one_1"=>1,"one_1"=>1,"one_1"=>1,"one_1"=>1]];
//     var_dump($x);
//     return dd($x);
//     return view::create('courses.index');
// });
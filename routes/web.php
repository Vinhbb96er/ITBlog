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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController');

Route::post('comment/create/{id}', 'PostController@createComment')->name('create-comment');

Route::get('like/{id}', 'PostController@like')->name('like');

// Route::group(['middware' => 'auth'], function () {
//     Route::resource('post');
// });

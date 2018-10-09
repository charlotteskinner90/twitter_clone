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
    return view('index');
});


// This route generated as part of the laravel/vue github repo
// This is safe to remove if you do not require it.
// laravel-vue-git-code

Route::get('/getUser', 'UsersController@getUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

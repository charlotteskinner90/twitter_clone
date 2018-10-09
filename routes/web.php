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
//Routes
Route::get('/', function () {
    return view('index');
});

//Route::get('/home', 'HomeController@index')->name('home');


// Endpoints
Route::get('/getUsers', 'UsersController@getUsers');

Route::get('/getTweets/{handle}', 'TweetsController@getUserTweets');

Route::get('/getTweets', 'TweetsController@getTweets');

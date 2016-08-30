<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();
Route::get('/offer', 'HomeController@offer');
Route::get('/profile', 'HomeController@profile');
Route::get('/my-adv', 'HomeController@my_adv');
Route::get('/search', 'HomeController@search');
Route::get('/adv', 'HomeController@adv');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@signup');

Route::get('/home', 'HomeController@index');

Route::post('/create', 'PropertyController@create');

//Route::get('/register', function () {
//    return view('register');
//});
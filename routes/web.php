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

Route::get('/', 'PublicController@index');
Route::get('contact', 'PublicController@contact');

Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');
Route::resource('register', 'RegisterController');
Route::get('terms-and-contition', 'TermsAndConditionController@index');

Route::post('validation', 'ValidationController@mobile_validate');

Route::resource('posts', 'PostController');
Route::resource('profile', 'ProfileController');

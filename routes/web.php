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
Route::get('/private', 'HomeController@private')->name('private');
Route::get('/', 'ActorController@index');
Route::resource('/movies', 'MovieController');
Route::resource('/actors', 'ActorController');
Route::resource('/awards', 'AwardController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

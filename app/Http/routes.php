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

Route::get('/', 'PostController@index');
Route::post('post', 'PostController@store');
Route::get('post/new', 'PostController@new_post');
Route::get('post/{id}', 'PostController@show');


Route::get('about', 'StaticPageController@about');
Route::get('about', 'StaticPageController@contact');
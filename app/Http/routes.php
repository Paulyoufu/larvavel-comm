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


Route::get('/','PostsController@index');
Route::resource('discussions','PostsController');
Route::get('/users/register','UserController@register');
Route::get('/users/login','UserController@login');
Route::get('/user/login','UserController@login');
Route::post('/user/register','UserController@store');//注册
Route::post('/user/login','UserController@signin');//注册 App\Http\Controllers\PostsController@show
Route::get('/logout','UserController@logout');
Route::resource('comment','CommentsController');
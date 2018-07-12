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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'PostController@getHomePosts')->name('home');
Route::get('/author/post', 'PostController@getPostForm')->name('post.form');
Route::post('/author/post', 'PostController@create')->name('post.form');
Route::get('/author/post/detail/{id}', 'PostController@show')->name('post.detail');
Route::get('/author/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/author/post/edit/{id}', 'HomeController@updatePost')->name('post.update');



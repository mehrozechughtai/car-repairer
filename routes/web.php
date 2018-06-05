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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'adminController@index')->name('admin.dashboard');

Route::get('/user/post', 'HomeController@getPostForm')->name('post.form');
Route::post('/user/post', 'HomeController@createPost')->name('post.form');
Route::get('/user/post/detail/{id}', 'HomeController@getPost')->name('post.detail');
Route::get('/user/post/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/user/post/edit/{id}', 'HomeController@updatePost')->name('post.update');
Route::get('/user/post/delete/{id}', 'HomeController@deletePost')->name('post.delete');

Route::get('/admin/post/detail/{id}', 'AdminController@getPostadmin')->name('adminpost.detail');
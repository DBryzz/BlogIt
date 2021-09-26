<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/view/posts', 'HomeController@index')->name('userHome');

Route::get('/', 'PostController@index');
route::post('/users/upload', 'UserController@uploadAvatar')->name('users.upload');
route::get('/users/upload', 'UserController@uploadForm')->name('users.uploadForm');

Route::get('/posts/knowUs', 'PostController@knowUs')->name('posts.knowUs');
Route::resource('posts', 'PostController');

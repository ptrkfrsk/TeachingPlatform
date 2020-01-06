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
    return view('welcome');
});

Route::resource('/posts', "PostsController")->middleware('auth');
Route::resource('/comments', "CommentController");

Route::resource('/books', "BooksController")->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books/{id}', 'BooksController@show');

Route::get('/books/{id}/edit', 'BooksController@edit');


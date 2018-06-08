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
Route::get('main', 'PagesController@main');
    Route::post('main', 'BooksController@swapped');
Route::get('/', 'PagesController@main');
Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
Route::get('login','PagesController@login');
Route::get('privacyPolicy','PagesController@privacyPolicy');
Route::get('books','BooksController@index');
Route::get('books/swap/{id}','BooksController@swap');
Route::get('books/create','BooksController@create');
Route::get('books/{id}','BooksController@show');
Route::get('books/destroy/{id}','BooksController@destroy');
Route::post('books','BooksController@store');


Auth::routes();
Route::get('logout','PagesController@logout');

Route::get('/home', 'HomeController@index')->name('home');

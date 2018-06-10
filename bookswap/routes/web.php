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
Route::get('offers', 'OffersController@offers');
Route::get('offers/destroy/{id}', 'OffersController@destroy');
Route::get('offers/accept/{id}', 'OffersController@accept');
Route::get('offers/{id}', 'OffersController@offer');
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
Route::post('/send', 'EmailController@send');

Auth::routes();
Route::get('logout','PagesController@logout');

Route::get('/home', 'HomeController@index')->name('home');

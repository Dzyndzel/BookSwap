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
Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
Route::get('register','PagesController@register');
Route::get('login','PagesController@login');
Route::get('privacyPolicy','PagesController@privacyPolicy');


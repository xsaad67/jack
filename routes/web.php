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

Route::get('/','QuoteController@index');

Route::get('/create-image','ImageController@addAlphaColor');
Route::get('/image','ImageController@image');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/topics','CrawlLinksController@topics');
Route::get('/authors','CrawlLinksController@author');
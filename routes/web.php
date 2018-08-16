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

Route::redirect('/', 'contactos');

Route::get('contactos','Web\PageController@index')->name('contactos');
Route::get('contacto/{id}', 'Web\PageController@contacto')->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

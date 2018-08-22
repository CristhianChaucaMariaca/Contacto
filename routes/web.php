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

Auth::routes();

Route::get('contactos','Web\PageController@index')->name('contactos');
Route::get('contacto/{id}', 'Web\PageController@contacto')->name('contacto');
Route::get('etiquetas/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('lista-etiquetas', 'Web\PageController@tags')->name('tags');

//Admin
Route::resource('companies', 'Admin\CompanyController');
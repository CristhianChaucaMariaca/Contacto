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
Route::get('Empresas', 'Web\PageController@companies')->name('companies');
Route::get('Contactos-Empresa{id}', 'Web\PageController@contact_company')->name('contact_company');

//Admin
Route::resource('companies', 'Admin\CompanyController');
Route::resource('types', 'Admin\TypeController');
Route::resource('tags', 'Admin\TagController');
Route::resource('peoples', 'Admin\PeopleController');
Route::resource('contacts', 'Admin\ContactController');
Route::get('tags_personas/{id}','Admin\PeopleController@tags')->name('tags_personas');
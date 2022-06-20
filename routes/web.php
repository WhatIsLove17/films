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

Route::get('/', 'App\Http\Controllers\welcomeController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\aboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\contactsController@index')->name('contacts.index');


Route::get('/films', 'App\Http\Controllers\FilmController@index')->name('film.index');
Route::post('/films', 'App\Http\Controllers\FilmController@store')->name('film.store');
Route::get('/films/create', 'App\Http\Controllers\FilmController@create')->name('film.create');
Route::get('/films/{film}', 'App\Http\Controllers\FilmController@show')->name('film.show');
Route::get('/films/{film}/edit', 'App\Http\Controllers\FilmController@edit')->name('film.edit');
Route::patch('/films/{film}', 'App\Http\Controllers\FilmController@update')->name('film.update');
Route::delete('/films/{film}', 'App\Http\Controllers\FilmController@destroy')->name('film.delete');

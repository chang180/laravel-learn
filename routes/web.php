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
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/form', 'HomeController@create');
Route::get('/userform', 'HomeController@userform');
Route::post('/save', 'HomeController@store');


Route::get('/home', 'HomeController@index')->name('home');

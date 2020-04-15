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

Route::get('/', 'AllController@index')->name('home');
Route::get('/Certificates', 'AllController@cer')->name('cer');

// Mail
Route::post('/contact','AllController@send')->name('contact');


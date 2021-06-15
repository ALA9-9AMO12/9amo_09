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

Route::get('/', 'NavController@index');
Route::get('/voor_imkers', 'NavController@voorImkers');
Route::get('/cursussen', 'NavController@cursussen');
Route::get('/nieuwsarchief', 'NavController@nieuwsarchief');
Route::get('/artikelen', 'NavController@artikelen');
Route::get('/imkersvereniging', 'NavController@imkersVereniging');
Route::get('/contact', 'NavController@contact');
Route::get('/login', 'NavController@login');
Route::get('/admin', 'NavController@admin');

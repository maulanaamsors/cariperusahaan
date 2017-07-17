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

Route::get('/', 'PerushaanController@home');
Route::get('/pemilik/tambahperusahaan', 'PerushaanController@index');
Route::post('/pemili/tambahperusahaan', 'PerushaanController@create');
Route::get('/admin/profile', 'AdminController@index');
Route::get('/admin/olahpemilik', 'pengolahanakunpengusahahController@index');
Route::get('/admin/login','AdminController@formlogin');


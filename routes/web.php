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

//Route for every user
Auth::routes();
Route::get('/home', 'PerushaanController@home');

//Route for Pemilik
Route::get('/', 'PerushaanController@home');
Route::get('/login','PerushaanController@formlogin');
Route::post('/login','LoginPemilikController@guard');
Route::get('/pemilik', 'PerushaanController@dasboard');
Route::get('/pemilik/tambahperusahaan', 'PerushaanController@index');
Route::post('/pemilik/tambahperusahaan', 'PerushaanController@create');
Route::get('/pemilik/editperusahaan', 'PerushaanController@getEdit');
Route::post('/pemilik/editperusahaan', 'PerushaanController@putEdit');

//Route for Admin
Route::get('/admin/olahdatausaha','PerushaanController@olahdatausaha');
Route::get('/admin/profile', 'AdminController@index');
Route::get('/pemilik/login','Pemilik_usahaController@formlogin');
Route::get('/pemilik/signup','Pemilik_usahaController@formsignup');
Route::get('/pemilik/lupapassword','Pemilik_usahaController@formlupapassword');
Route::get('/admin/profile', 'AdminController@index');
Route::get('/admin/olahpemilik', 'pengolahanakunpengusahahController@index');
Route::put('/admin/olahpemilik', 'pengolahanakunpengusahahController@updateAction');

//send email
Route::get('/sendemail', 'HomeController@email');
//Route::get('/home', 'HomeController@index')->name('home');

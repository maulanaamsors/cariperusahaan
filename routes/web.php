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
Route::get('/pemilik/editphotoperusahaan', 'PerushaanController@getEditPhoto');
Route::get('/pemilik/profile/{id_pemilik}', 'Pemilik_UsahaController@profile');
Route::get('/pemilik/profile/{id_pemilik}/pengaturan', 'Pemilik_UsahaController@formeditprofile');
//Route for Admin
Route::get('/admin/olahdatausaha','PerushaanController@olahdatausaha');
Route::get('/admin/profile', 'AdminController@index');
Route::get('/pemilik/login','Pemilik_usahaController@formlogin');
Route::get('/pemilik/signup','Pemilik_usahaController@formsignup');
Route::get('/pemilik/lupapassword','Pemilik_usahaController@formlupapassword');
Route::get('/admin/profile', 'AdminController@index');
Route::get('/admin/olahpemilik', 'pengolahanakunpengusahahController@index');
Route::put('/admin/olahpemilik', 'pengolahanakunpengusahahController@updateAction');


//CRUD OLAH DATA WILAYAH KECAMATAN DAN KOTA
//CRUD Olah Data Wilayah Kecamatan
Route::get('/admin/olahdatawilayah/kecamatan','WilayahController@olahdatakecamatan');
Route::get('/admin/olahdatawilayah/kecamatan/tambah','WilayahController@formtambahdatakecamatan');
Route::post('/admin/olahdatawilayah/kecamatan/tambah','WilayahController@tambahdatakecamatan');
Route::get('/admin/olahdatawilayah/kecamatan/{kecam_id}/edit','WilayahController@formeditdatakecamatan');
Route::put('/admin/olahdatawilayah/kecamatan/{kecam_id}/edit','WilayahController@editdatakecamatan');
Route::get('/admin/olahdatawilayah/kecamatan/{kecam_id}/tampil','WilayahController@tampildatakecamatan');
Route::delete('/admin/olahdatawilayah/kecamatan/{kecam_id}/hapus','WilayahController@hapusdatakecamatan');

//CRUD Olah Data Wilayah Kota
Route::get('/admin/olahdatawilayah/kota','WilayahController@olahdatakota');
Route::get('/admin/olahdatawilayah/kota/{kota_id}/edit','WilayahController@formeditdatakota');
Route::put('/admin/olahdatawilayah/kota/{kota_id}/edit','WilayahController@editdatakota');
Route::get('/admin/olahdatawilayah/kota/{kota_id}/tampil','WilayahController@tampildatakota');
Route::delete('/admin/olahdatawilayah/kota/{kota_id}/hapus','WilayahController@hapusdatakota');

/*Route::get('/storage/{file_name}',
function ($file_name){
    return Image::make(storage_path('public/images'. $file_name))->response();
});*/


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/email', 'HomeController@email')->name('sendEmail');

//send email

Route::get('/sendemail', 'HomeController@email');
//Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listprovinsi', 'ApiPrusahaanController@getListProvinsi');
Route::get('/listkota', 'ApiPrusahaanController@getListKota');
Route::get('/listkecamatan', 'ApiPrusahaanController@getListKecamatan');
Route::get('/listperusahaan/{kecamatan}', 'ApiPrusahaanController@getListPerusahaan');
Route::get('/listperusahaan', 'ApiPrusahaanController@getListAllPerusahaan');
Route::get('/listsektor', 'ApiPrusahaanController@getListSektor');
Route::get('/perusahaan/{id_prusahaan}', 'ApiPrusahaanController@getPerusahaan');
Route::get('/listphoto/{id_prusahaan}', 'ApiPrusahaanController@getListPhoto');


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

Route::get('/', [
    'uses' => 'PagesController@getIndex',
    'as' => 'home'
]);
Route::get('/jadwal', [
    'uses' => 'PagesController@getJadwal',
    'as' => 'jadwal'
]);
Route::get('/dokter', [
    'uses' => 'PagesController@getDokter',
    'as' => 'dokter'
]);
Route::get('/buat-janji', [
    'uses' => 'PagesController@getBuatjanji',
    'as' => 'janji'
]);
Route::get('/ambil-nomor', [
    'uses' => 'PagesController@getAmbilnomor',
    'as' => 'nomor'
]);
Route::get('/admin', 'PagesController@getAdmin');
Route::get('/dashboard', 'PagesController@getDashboard');
Route::post('/adminlogin','auth@login');
Route::post('/action-buatjanji',"action@buatjanji");
Route::middleware('usercheck')->group(function(){

});

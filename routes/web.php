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
Route::get('/buat-janji-form/{dokter}', [
    'uses' => 'PagesController@getBuatjanjiform',
    'as' => 'janji2'
]);
Route::get('/ambil-nomor', [
    'uses' => 'PagesController@getAmbilnomor',
    'as' => 'nomor'
]);
Route::get('/admin', 'PagesController@getAdmin');
Route::post('/adminlogin','auth@login');
Route::post('/action-buatjanji',"action@buatjanji");
Route::post('/dokter-pagination',"action@pagi_dokter");
Route::get('/logout',"action@logout");
Route::middleware('usercheck')->group(function(){
    Route::get('/admin/dashboard', [
        'uses' => 'PagesController@getDashboard',
        'as' => 'dashboard'
        ]);
    Route::get('/admin/janji', [
        'uses' => 'PagesController@getDashboardJanji',
        'as' => 'dashboard-janji'
        ]);
    Route::get('/admin/jadwal', [
        'uses' => 'PagesController@getDashboardJadwal',
        'as' => 'dashboard-jadwal'
        ]);
    Route::get('/admin/jadwal/add', [
        'uses' => 'PagesController@getDashboardJadwalInput',
        'as' => 'dashboard-jadwal-input'
        ]);
    Route::get('/admin/dokter', [
        'uses' => 'PagesController@getDashboardDokter',
        'as' => 'dashboard-dokter'
        ]);
    Route::get('/admin/dokter/add', [
        'uses' => 'PagesController@getDashboardDokterInput',
        'as' => 'dashboard-dokter-input'
        ]);
    Route::get('/table/janji_pasien',"jsontable@janji_pasien");
    Route::get('/table/jadwal_dokter',"jsontable@jadwal_dokter");
    Route::get('/table/list_dokter',"jsontable@list_dokter");
});
Route::get('/table/jadwal_dokter_user','jsontable@jadwal_dokter_user');
Route::get('/table/janji_jadwal','jsontable@jadwal_dokter_janji');
//external securing
//Route::any('/css/*/*',function(){
//    return redirect()->back();
//});
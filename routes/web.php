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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/','MahasiswaController@show_mhs');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/dftrmhs', 'MahasiswaController@show_mhs');
Route::get('/home/tambahmhs', 'MahasiswaController@tambahmhs');
Route::post('/home/simpanmhs', 'MahasiswaController@simpanmhs');
Route::get('/home/detailmhs/{id}', 'MahasiswaController@detailmhs');
Route::get('/home/editmhs/{id}', 'MahasiswaController@editmhs');
Route::post('/home/updatemhs', 'MahasiswaController@updatemhs');
Route::get('/home/deletemhs/{id}', 'MahasiswaController@deletemhs');


Route::get('/home/dftrpengampu', 'PengampuController@show_pengampu');
Route::get('/home/tambahpengampu', 'PengampuController@tambahpengampu');
Route::post('/home/simpanpgm', 'PengampuController@simpanpgm');
Route::get('/home/detailpengampu/{id_mengampu}', 'PengampuController@detailpengampu');
Route::get('/home/editpgm/{id_mengampu}', 'PengampuController@editpgm');
Route::post('/home/updatepgm', 'PengampuController@updatepgm');
Route::get('/home/deletepgm/{id_mengampu}', 'PengampuController@deletepgm');

Route::get('/home/dftrmatkul', 'MatakuliahController@show_mtk');
Route::get('/home/tambahmtk', 'MatakuliahController@tambahmtk');
Route::post('/home/simpanmtk', 'MatakuliahController@simpanmtk');
Route::get('/home/detailmtk/{id_matkul}', 'MatakuliahController@detailmtk');
Route::get('/home/editmtk/{id_matkul}', 'MatakuliahController@editmtk');
Route::post('/home/updatemtk', 'MatakuliahController@updatemtk');
Route::get('/home/deletemtk/{id_matkul}', 'MatakuliahController@deletemtk');

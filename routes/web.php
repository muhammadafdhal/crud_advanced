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
    return view('index');
});

Route::get('barang', 'DataBarangController@index')->name('barang');
Route::get('barang/tambah','DataBarangController@create')->name('tambah');
Route::post('barang/simpan', 'DataBarangController@store')->name('simpanData');
Route::delete('barang/hapus/{id}','DataBarangController@destroy')->name('hapus');
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'AdminController@index');

Route::get('Kasus','AdminController@create1');
Route::get('store1/','Controller@store1');

Route::get('DataSiswa','Controller@create');
Route::post('store','Controller@store');
Route::get('/DataSiswa/{id}/edit','Controller@edit')->name('DataSiswa.edit');
Route::post('/DataSiswa/{id}/update','Controller@update')->name('siswa.edit');
Route::post('/DataSiswa/{id}/delete','Controller@delete')->name('siswa.delete');

Route::get('DataPelanggaran','AdminController@create2');
Route::get('store2.input','Controller@store2')->name('store2.input');


Route::get('admin/','AdminController@Login');
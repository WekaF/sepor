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

// Route::get('/', function () {
//     return view('welcom');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::resource('kategori', 'KategoriController');
Route::resource('subkategori', 'SubKatController');
Route::resource('trayek', 'TrayekController');
Route::resource('taxi','TaxiController');
Route::resource('keretainfo','KeretainfoController');
Route::resource('jeniska','JeniskeretaController');
Route::resource('stasiuninfo','StasiunInfoController');
Route::resource('kontak','KontakController');
Route::resource('jalur','JalurController');

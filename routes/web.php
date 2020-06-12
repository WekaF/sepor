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



Route::group(['prefix' => '','as'=>'web.'], function() {
    Route::get('', ['as' => 'home', 'uses' => 'BerandaController@index']);
    Route::get('news/{id}', ['as' => 'show', 'uses' => 'BerandaController@show']);
    Route::get('search/', ['as' => 'search', 'uses' => 'BerandaController@search']);
});
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::resource('kategori', 'KategoriController');
Route::resource('subkategori', 'SubKatController');
Route::resource('trayek', 'TrayekController');
Route::resource('taxi','TaxiController');
Route::resource('keretainfo','KeretainfoController');
Route::resource('jeniska','JeniskeretaController');
Route::resource('stasiuninfo','StasiunInfoController');
Route::resource('kontak','KontakController');
Route::resource('berita','BeritaController');
Route::resource('feedback', 'feedbackController');
Route::resource('jalur','JalurController');
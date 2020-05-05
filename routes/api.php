<?php

use Illuminate\Http\Request;



Route::get('home', 'HomeController@homej');

Route::group(array('prefix' => 'subkategori'), function () {
   Route::get('', 'SubKatController@subkat');
   Route::get('/{id}', 'SubKatController@show');
   
});
Route::group(array('prefix' => 'destination'), function () {
   Route::get('/{id}', 'SubKatController@list');
});


Route::group(array('prefix' => 'kategori'), function () {
   Route::get('', 'KategoriController@kate');
   Route::get('/{id}', 'KategoriController@show');
   Route::get('/{id}/{detail}', 'KategoriController@list');
});

Route::group(array('prefix' => 'trayek'), function () {
   Route::get('', 'TrayekController@trayek');
   Route::get('/{id}', 'TrayekController@show');
});

Route::group(array('prefix' => 'taxi'), function () {
   Route::get('', 'TaxiController@taxi');
   Route::get('/{id}', 'TaxiController@show');
});

Route::group(array('prefix' => 'keretainfo'), function () {
   Route::get('', 'KeretainfoController@infokereta');
   Route::get('/{id}', 'KeretainfoController@keretashow');
});

Route::get('kontak', 'KontakController@kontak');

Route::get('stasiuninfo', 'StasiunInfoController@infostat');

Route::group(array('prefix' => 'berita'), function () {
   Route::get('', 'BeritaController@berita');
   Route::get('/detail/{id}', 'BeritaController@show');
});

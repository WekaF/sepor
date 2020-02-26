<?php

use Illuminate\Http\Request;



 Route::get('subkategori/{id}', 'SubKatController@subkat');
 Route::get('kategori', 'KategoriController@kate');
 Route::get('trayek','TrayekController@trayek');
 Route::get('taxi','TaxiController@taxi');
 Route::get('home','HomeController@homej');
 Route::get('keretainfo','KeretaInfoController@infokereta');
 Route::get('kontak','KontakController@kontak');
 Route::get('stasiuninfo','StasiunInfoController@infostat');
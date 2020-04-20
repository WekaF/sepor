<?php

use Illuminate\Http\Request;



Route::get('home','HomeController@homej');

Route::group(array('prefix' => 'subkategori'), function(){
    Route::get('', 'SubKatController@subkat');
    Route::get('/{id}', 'SubKatController@show');
    Route::get('/{id}/{detail}','SubKatController@list');
   });

Route::group(array('prefix' => 'kategori'), function(){
    Route::get('', 'KategoriController@kate');
    Route::get('/{id}', 'KategoriController@show');
   //  Route::get('/{id}/{detail}', 'KategoriController@list');
   });   

Route::group(array('prefix' => 'trayek'), function(){
    Route::get('', 'TrayekController@trayek');
    Route::get('/{id}', 'TrayekController@show');
   });
   
Route::group(array('prefix' => 'taxi'), function(){
    Route::get('', 'TaxiController@taxi');
    Route::get('/{id}', 'TaxiController@show');
   });

Route::group(array('prefix' => 'keretainfo'), function(){
    Route::get('', 'KeretainfoController@infokereta');
    Route::get('/{id}', 'KeretainfoController@keretashow');
   });

 Route::get('kontak','KontakController@kontak');

 Route::get('stasiuninfo','StasiunInfoController@infostat');
 
 
 Route::group(array('prefix' => 'jalur'), function(){
    Route::get('', 'JalurController@jalur');
    Route::get('/{id}', 'JalurController@show');
   });
//  Route::get('jalur/{id}','JalurController@jalur');
 
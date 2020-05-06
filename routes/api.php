<?php

use Illuminate\Http\Request;



Route::get('home','HomeController@homej');

Route::group(array('prefix' => 'subkategori'), function(){
    Route::get('', 'SubKatController@subkat');
    Route::get('/{id}', 'SubKatController@show');
   });

   Route::group(array('prefix' => 'destination'), function () {
      Route::get('/{id}', 'SubKatController@list');
   });
   

Route::group(array('prefix' => 'kategori'), function(){
    Route::get('', 'KategoriController@kate');
    Route::get('/{id}', 'KategoriController@show');
     Route::get('/detail/{id}', 'KategoriController@list');
   
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
    Route::get('detail/{id}','KeretainfoController@detail');
   });
   

//  Route::get('kontak','KontakController@kontak');
 
 Route::group(array('prefix' => 'kontak'), function(){
   Route::get('', 'KontakController@kontak');
   Route::get('/{id}', 'KontakController@show');
     
  });


 Route::get('stasiuninfo','StasiunInfoController@infostat');


 Route::group(array('prefix' => 'berita'), function(){
    Route::get('','BeritaController@berita');
    Route::get('/detail/{id}','BeritaController@show'); 
 });

 Route::group(array('prefix' => 'feedback'), function(){
   Route::get('','FeedbackController@index');
   Route::post('','FeedbackController@store');
   Route::get('/{id}','FeedbackController@show'); 
});

// Route::get('feedback','FeedbackController@index');
// Route::post('feedback','FeedbackController@store');
// Route::get('feedback/{id}','FeedbackController@show'); 


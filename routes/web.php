<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.index');
}); 


Route::group(['namespace' => 'App\Http\Controllers'], function () { 
    Route::get('/register', 'Frontend\HomeFrontController@index')->name('register'); 
    Route::get('/kategori', 'Frontend\KategoriFrontController@index')->name('kategori');

    Route::get('/detail_buku', 'Frontend\DetailBukuFrontController@index')->name('detail_buku');
    Route::get('/basing', 'Frontend\basingkamuController@index')->name('basingkamu');
}); 
    
Route::group(['namespace' => 'App\Http\Controllers'], function () { 
    Route::group(['middleware' => ['auth']], function () { 
    
    });
});

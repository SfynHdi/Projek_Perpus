<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.index');
}); 


Route::group(['namespace' => 'App\Http\Controllers'], function () { 
    Route::get('/register', 'Frontend\HomeFrontController@index')->name('register'); 
    Route::get('/kategori', 'Frontend\KategoriFrontController@index')->name('kategori');
    Route::get('/tentang', 'Frontend\tentangFrontController@index')->name('tentang');
    Route::get('/kontak', 'Frontend\kontakController@index')->name('kontak');
    Route::get('/kategori_index', 'Backend\KategoriBackendController@indexKategori')->name('kategori_index');
    Route::get('/detail-buku', 'Frontend\DetailBukuFrontController@index')->name('detail.buku');
    Route::get('/home', 'Frontend\HomeFrontController@indexhome')->name('home.index');
}); 
    
Route::group(['namespace' => 'App\Http\Controllers'], function () { 
    Route::group(['middleware' => ['auth']], function () { 
    
    });
});

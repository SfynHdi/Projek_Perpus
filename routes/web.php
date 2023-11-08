<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
}); 

    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::get('/register', 'Frontend\HomeFrontController@index')->name('register'); 
    }); 
     
    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::group(['middleware' => ['auth']], function () { 
     
        });

});

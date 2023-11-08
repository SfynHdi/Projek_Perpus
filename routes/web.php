<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('auth.login');
});
  
    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::get('/register', 'Frontend\HomeFrontController@index')->name('register'); 
        Route::get('/login', 'Frontend\HomeFrontController@index')->name('login.home'); 
        
    }); 
     
    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::group(['middleware' => ['auth']], function () { 

            Route::post('/home', 'Frontend\HomeFrontController@indexhome')->name('home'); 
     
        });
});
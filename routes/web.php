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
<<<<<<< HEAD
    return view('auth.login');
}); 

    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::get('/register', 'Frontend\HomeFrontController@index')->name('register'); 
    }); 
     
    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::group(['middleware' => ['auth']], function () { 
     
        });

=======
    return view('front.home.index');
>>>>>>> a2dc0431e6433636cb0ced48cf6d210b4308e485
});
  
    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::get('/register', 'Frontend\HomeFrontController@index')->name('register'); 
    }); 
     
    Route::group(['namespace' => 'App\Http\Controllers'], function () { 
        Route::group(['middleware' => ['auth']], function () { 
     
        });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard.index');
})->middleware('auth');;
Route::get('/login',function(){
   return view('login.login');
})->middleware('auth');;
Route::group(['prefix'=>'admin'],function(){
    Route::get('/users','UsersController@index')->middleware('auth');;

    Route::get('/student','UsersController@sindex')->middleware('auth');;
    Route::get('/teacher','UsersController@tindex')->middleware('auth');;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth','CheckRole:0']], function(){
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin');
});
Route::get('/home','HomeController@index')->name('home');
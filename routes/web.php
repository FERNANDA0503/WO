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
    Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');
    Route::get('/artikel','Admin\ArtikelController@index')->name('artikel');
    Route::post('/artikel/create','Admin\ArtikelController@create')->name('artikel_create');
    Route::get('/artikel/delete/{id}','Admin\ArtikelController@delete')->name('artikel_delete');
    //view update artikel
        Route::get('/artikel/update/{id}','Admin\ArtikelController@update')->name('artikel_update');
        Route::post('/artikel/aksi_update/{id}','Admin\ArtikelController@aksi_update')->name('aksi_update');

});
Route::get('/home','HomeController@index')->name('home');
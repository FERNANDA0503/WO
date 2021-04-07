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
    //view data pengantin
    Route::get('/datapengantin','Admin\pengantinController@index')->name('data_pengantin');
    Route::get('/datapengantin/delete/{id}','Admin\pengantinController@delete')->name('data_pengantin_delete');    
    Route::post('/datapengantin/create','Admin\pengantinController@create')->name('data_pengantin_create');
        //view update data pengantin
        Route::get('/datapengantin/update/{id}','Admin\pengantinController@update')->name('data_pengantin_update');
        Route::post('/datapengantin/aksi_update/{id}','Admin\pengantinController@aksi_update')->name('aksi_update');

    Route::post('/datapengantin/create','Admin\pengantinController@create')->name('data_pengantin_create');
    Route::get('/datapengantin/delete/{id}','Admin\pengantinController@delete')->name('data_pengantin_delete');

    //user controller
    Route::get('/alluser','Admin\UserController@index')->name('alluser');
    Route::post('/alluser/create','Admin\UserController@create')->name('alluser_create');
    Route::get('/alluser/delete/{id}','Admin\UserController@delete')->name('alluser_delete');  
    //view update data user
        Route::get('/alluser/update/{id}','Admin\UserController@update')->name('alluser_update');
        Route::post('/alluser/aksi_update/{id}','Admin\UserController@aksi_update')->name('aksi_update');

     //busana controller
     Route::get('/data_busana','Admin\busanaController@index')->name('busana');
     Route::post('/data_busana/create','Admin\busanaController@create')->name('busana_create');
     Route::get('/data_busana/delete/{id}','Admin\busanaController@delete')->name('busana_delete');
       //view update data user
       Route::get('/data_busana/update/{id}','Admin\busanaController@update')->name('busana_update');
       Route::post('/data_busana/aksi_update/{id}','Admin\busanaController@aksi_update')->name('aksi_update');
});
Route::get('/home','HomeController@index')->name('home');
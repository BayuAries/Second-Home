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
//pages
Route::get('/', 'PagesController@welcome');

Route::get('/utama', 'GuestController@index');

Route::get('/guest/{id}/book', 'GuestController@show');

Route::get('/konfirmasi', 'GuestController@konfirmasi');




//authentic
Auth::routes();

//admin
Route:: group(['middleware'=>['auth','admin']], function(){

  Route::get('/admin', 'AdminController@show');

  Route::get('/table', 'AdminController@index');

  // Route::get('/book', 'AdminController@book');

  Route::get('/admin/{id}/edit', 'AdminController@edit');

  Route::post('/admin/{id}/update', 'AdminController@update');

  Route::get('/admin/{id}/delete', 'AdminController@delete');
});

//Owner
Route:: group(['middleware'=>['auth','owner']], function(){

  Route::get('/owner', 'OwnerController@show');

  Route::get('/create', 'OwnerController@create');

  Route::post('/owner', 'OwnerController@upload');

  Route::get('/update', 'OwnerController@index');

  Route::get('/book', 'OwnerController@book');

  Route::get('/{id}/edit', 'OwnerController@edit');

  Route::post('/{id}/update', 'OwnerController@update');

  Route::get('/{id}/delete', 'OwnerController@delete');

});

//guest
Route::group(['middleware'=>['auth','user']],function(){

  Route::post('/guest/{nama}/booking','GuestController@upload');

  Route::get('/guest/history', 'GuestController@store');

  Route::get('/guest/{id}/delete', 'GuestController@delete');

});

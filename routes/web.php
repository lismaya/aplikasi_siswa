<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','AuthController@login')->name('login');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postLogin','AuthController@postLogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware'=>['auth','checkRole:admin']],function(){
  Route::get('/siswa','SiswaController@index');
  Route::post('siswa/create','SiswaController@create');
  Route::get('/siswa/{id}/edit','SiswaController@edit');
  Route::post('/siswa/{id}/update','SiswaController@update');
  Route::get('/siswa/{id}/delete','SiswaController@delete');
  Route::get('/siswa/{id}/profile','SiswaController@profile');
  Route::post('/siswa/{id}/addnilai','SiswaController@addnilai');
  Route::get('/siswa/{id}/{idmapel}/deletenilai','SiswaController@deletenilai');
  Route::get('/guru/{id}/profile','GuruController@profile');

});
Route::group(['middleware'=>['auth','checkRole:admin,siswa']],function(){
  Route::get('/dashboard','DashboardController@index')->middleware('auth');

});

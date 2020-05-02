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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::get('/jadwal','pageController@jadwal');
Route::get('/jadwal/create','jadwalController@create');
Route::post('/storejadwal','jadwalController@store')->name('storejadwal');
Route::get('/jadwal/{kode_jadwal}/delete','jadwalController@delete');

Route::get('/pembuktian', 'pageController@pembuktian');
Route::get('/pembuktian/create','pembuktianController@create');
Route::post('/storepembuktian','pembuktianController@store')->name('storepembuktian');
Route::get('/pembuktian/{kode_laporan}/delete','pembuktianController@delete');

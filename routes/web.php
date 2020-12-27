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


Route::get('/home2', 'WebController@home');
Route::get('/kuesioner', 'KuesionerController@kuesioner')->name('kuesioner');
Route::get('/hasilkuesioner', 'KuesionerController@hasilkuesioner')->name('hasilkuesioner');
Route::post('/createkuesioner','KuesionerController@createkuesioner')->name('createkuesioner');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
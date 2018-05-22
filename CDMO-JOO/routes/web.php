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




Auth::routes();
Route::get('home','HomeController@index');
Route::get('ForemanForm','HomeController@Foreman');
Route::get('HeadsForm','HomeController@Engr');
Route::get('EngrForm','HomeController@head');
Route::get('RequestStatus','HomeController@RequestStatus');
Route::get('requestform','HomeController@requests');
Route::get('welcome','HomeController@welcome');
Route::get('homepage','HomeController@app');
Route::get('/home', 'HomeController@index')->name('home');
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
    return view('dashboard');
});

Route::get('/user','UserController@profil');
Route::patch('/user/{id}', 'UserController@update');
// Route::get('/post','HomeController@post');
// Route::get('/game','HomeController@game');



Route::get('/posting','PostingController@index');
Route::post('/posting/add','PostingController@store');
Route::patch('/posting/update','PostingController@update');
Route::delete('/posting/delete','PostingController@destroy');



Route::get('/game','MenuGameController@index');
Route::get('/gameplay','MenuGameController@gameplay');
Route::post('/game','GameController@cari');

Route::get('/tambahgame','GameController@index');
Route::post('/tambahgame','GameController@insert');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

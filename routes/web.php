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
})->name('home');

//




# testing purpose
#=================

Route::get('/browseEvents', 'EventController@getAllEvent')->name('browseEvents');
Route::resource('events','EventController');
Route::get('/event',function(){
    return view('event');
});
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


Route::get('/browseEvents', 'EventController@getBrowseEvent')->name('browseEvents');

Route::get('/listEvent/{id}', 'EventController@getSpesificEvent');

Route::get('/ticketDetail/{id}','EventController@getTicketDetail');


# testing purpose
#=================

Route::resource('events','EventController');
Route::get('/event',function(){
    return view('event');
});

Route::get('/eventSeller',function(){
    return view("eventSeller");
})->name('listEvent');

Route::get('/myCart',function(){
    return view("cart");
});



Route::get('/insertTiket',function(){
    return view("insertTiket");
});

Route::get('/admin',function(){
    return view("admin");
})->name('admin');


Route::get('/adminEvent',function(){
    return view("adminEvent");
})->name('adminEvent');


Route::get('/adminCategory',function(){
    return view("adminCategory");
})->name('adminCategory');


Route::get('/adminTicket',function(){
    return view("adminTicket");
})->name('adminTicket');


Route::get('/adminUser',function(){
    return view("adminUser");
})->name('adminUser');

Route::get('/auth',function(){
    return view("auth");
})->name('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register','UserController@insert');

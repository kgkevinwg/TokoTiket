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
Route::post('/category', 'CategoryController@store');

Route::get('/listEvent/{id}', 'EventController@getSpesificEvent');

Route::get('/ticketDetail/{id}','EventController@getTicketDetail');

Route::post('/insertTiket','EventController@newTicket');
Route::post('/newEvent','EventController@newEvent')->middleware(\App\Http\Middleware\CheckRole::class);;
Route::post('/newUser','UserController@newUser')->middleware(\App\Http\Middleware\CheckRole::class);;
Route::post('/newCategory','CategoryController@newCategory')->middleware(\App\Http\Middleware\CheckRole::class);;

Route::get('/insertTiket','EventController@getInsertTiketPage');

Route::get('/admin','EventController@getAllEventTable')->name('admin')->middleware(\App\Http\Middleware\CheckRole::class);
Route::get('/adminUsers','UserController@getAllUserTable')->name('adminUsers')->middleware(\App\Http\Middleware\CheckRole::class);;
Route::get('/adminCategories','CategoryController@getAllCategoryTable')->name('adminCategories')->middleware(\App\Http\Middleware\CheckRole::class);;
Route::get('/adminTickets','EventController@getAllTicketTable')->name('adminTickets')->middleware(\App\Http\Middleware\CheckRole::class);


Route::get('/adminEvents','EventController@createEvent')->name('adminEvents')->middleware(\App\Http\Middleware\CheckRole::class);;



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


Route::get('/auth',function(){
    return view("auth");
})->name('auth');

Auth::routes();;

Route::post('/register','UserController@insert');

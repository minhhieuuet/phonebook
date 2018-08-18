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
    return view('phonebook');
});
Route::get('phonebook/list','PhoneBookController@list');
Route::resource('phonebook','PhoneBookController');
Route::get('/{any}',function(){
	return view('phonebook');
})->where('any','[A-Za-z]+');



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
    return view('default');
});
//Route::get('/user/create', function () {
//    return view('default');
//});

//Route::get('deleteUser','UserController@delete')->name('del');
Route::resource('user','UserController');


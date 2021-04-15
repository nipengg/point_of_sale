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
    if (Auth::check()) {
        return view('home');
    }
    else{
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create/book', 'BookController@create');
Route::post('/store/book', 'BookController@store');
Route::get('/index/book', 'BookController@index');

Route::get('/index/user', 'UserController@index');
Route::get('/create/user', 'UserController@create');
Route::post('/store/user', 'UserController@store');

Route::get('/index/distributor', 'DistributorController@index');
Route::get('/create/distributor', 'DistributorController@create');
Route::post('/store/distributor', 'DistributorController@store');

Route::get('/index/pasok', 'PasokController@index');
Route::get('/create/pasok', 'PasokController@create');
Route::post('/store/pasok', 'PasokController@store');

Route::get('/index/transaction', 'TransactionController@index');
Route::get('/create/transaction', 'TransactionController@create');
Route::post('/store/transaction', 'TransactionController@store');

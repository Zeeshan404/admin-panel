<?php

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
////
//Route::get('/users','UserController@index')->name('users.index');
//Route::get('/users/{user}','UserController@show')->name('users.show');
//Route::get('/users/create','UserController@create')->name('users.create');
//Route::post('/users','UserController@store')->name('user.store');
//Route::get('/users/{user}/edit','UserController@edit')->name('users.edit');
//Route::patch('/users/{user}','UserController@update')->name('users.update');
//Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');


Route::resource('users','UserController')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

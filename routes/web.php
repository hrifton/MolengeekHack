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
Route::get('/profil', function () {
    return view('profil',['user'=> Auth::user()] );
});
Route::get('/list', function () {
    return view('list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/role','RoleController');

Route::resource('/user','UserController');

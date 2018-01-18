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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/admin/users', ['uses' => 'Admin\Users\UsersController@index']);  //get User list

Route::get('/admin/users/create', ['uses' => 'Admin\Users\UsersController@create']);  //create user form

Route::post('/admin/users/addauthor', ['uses' => 'Admin\Users\UsersController@addAuthor']);  //create user form


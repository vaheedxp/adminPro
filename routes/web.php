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
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'StudentsController@index')->name('studentsindex');
//Route::get('/users', 'UsersController@index')->name('usersindex');

//Route for router-views
Route::get('{path}', 'HomeController@index')->where('paht', '([A-z\d-\/_.]+)"');

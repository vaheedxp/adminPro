<?php

Route::get('/', function () { return view('welcome'); });
// Route::view('/students', 'students');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route for router-views
Route::get('{path}', 'HomeController@index')->where('paht', '([A-z\d-\/_.]+)"');

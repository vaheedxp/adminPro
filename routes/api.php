<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) { return $request->user(); });

Route::resource('students', 'StudentsController');
Route::resource('employees', 'EmployeeController');
Route::apiResource('users' , 'API\UsersController');
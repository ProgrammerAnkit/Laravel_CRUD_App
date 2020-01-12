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
Route::post('student_details', "StudentController@index");
Route::get('show_student_details', "StudentController@read");
Route::get('delete/{id}', "StudentController@delete_info");
Route::get('edit/{id}', "StudentController@edit_info");
Route::post('/update_user/{id}', 'StudentController@update');

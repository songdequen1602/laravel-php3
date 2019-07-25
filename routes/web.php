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
Route::get('students', 'StudentController@index')->name('student');
Route::get('classes', 'ClassRoomController@index')->name('classes');
Route::get('admins', function () {
    return view('admins');
});
Route::get('users', function () {
    return view('users');
});
Route::get('admin/classes', 'ClassRoomController@index' , function () {
    return view('admin/classes');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', function () {
    return view('hello');
});
// Route::get('hello', 'HelloController@index');
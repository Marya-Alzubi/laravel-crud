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

use App\Student;

Route::get('/', function () {
    return view('register');
});

//Route::get('/studentsList', function () {
//    return view('students');
//});
//Route::get('/single', function () {
//    return view('singleStudent');
//});
//Route::get('/table', function () {
//    $students= Student::all();
//    return view("/table", compact("students"));
//});

Route::post('/students', 'StudentController@store');
Route::get('/students', "StudentController@index");
Route::get('/students/{id}', "StudentController@show");
Route::get('/students/{id}/edit', "StudentController@edit");
Route::put('/students/{id}', "StudentController@update");
Route::delete('students/delete/{id}', "StudentController@destroy");


Route::get('table', "StudentController@showTable");

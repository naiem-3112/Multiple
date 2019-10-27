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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' =>['auth']], function(){
    Route::get('/student/list', 'StudentController@index')->name('student.list')->middleware(['check']);
    Route::get('/student/create-form', 'StudentController@createForm')->name('student.createForm');
    Route::post('/student/create', 'StudentController@create')->name('student.create');
    Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('/student/update{id}', 'StudentController@update')->name('student.update');
    Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
});



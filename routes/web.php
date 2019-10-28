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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student/list', 'StudentController@index')->name('student.list');
Route::get('/student/create-form', 'StudentController@createForm')->name('student.createForm')->middleware('checkUser');
Route::post('/student/create', 'StudentController@create')->name('student.create')->middleware('checkUser');
Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit')->middleware('checkAdmin');
Route::post('/student/update{id}', 'StudentController@update')->name('student.update')->middleware('checkAdmin');
Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete')->middleware('checkAdmin');

Route::prefix('role/')->group(function () {
    Route::get('/list', 'RoleController@index')->name('role.list');
    Route::get('/create-form', 'RoleController@roleCreateForm')->name('role.createForm');
    Route::post('/create', 'RoleController@roleCreate')->name('role.create');
    Route::get('/edit/{id}', 'RoleController@roleEdit')->name('role.edit');
    Route::post('/update{id}', 'RoleController@roleUpdate')->name('role.update');
    Route::get('/delete/{id}', 'RoleController@roleDelete')->name('role.delete');
});

Route::prefix('permission/')->group(function () {
    Route::get('/list', 'PermissionController@index')->name('permission.list');
    Route::get('/create-form', 'PermissionController@permissionCreateForm')->name('permission.createForm');
    Route::post('/create', 'PermissionController@permissionCreate')->name('permission.create');
    Route::get('/edit/{id}', 'PermissionController@permissionEdit')->name('permission.edit');
    Route::post('/update{id}', 'PermissionController@permissionUpdate')->name('permission.update');
    Route::get('/delete/{id}', 'PermissionController@permissionDelete')->name('permission.delete');
});



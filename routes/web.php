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

Route::get('/todo', 'ToDoController@index')->name('todo');
Route::post('/todo/create', 'ToDoController@create')->name('todo/create');
Route::get('/todo/update/{id}', 'ToDoController@update')->name('todo/update');
Route::get('/todo/delete/{id}', 'ToDoController@delete')->name('todo/delete');

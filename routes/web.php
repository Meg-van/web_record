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

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', 'PagesController@getHomePage');
Route::get('/lecturer', 'PagesController@getLecturer');
Route::get('/register', 'PagesController@getRegister');
Route::get('/dashboard', 'LecturerController@lecturers')->name('dashboard');


Route::post('/signin', 'LecturerController@login');
Route::post('/lecturer/add', 'LecturerController@store');

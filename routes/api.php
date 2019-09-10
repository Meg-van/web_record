<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => '/v1.1/attendance_4pi/', 'middleware' => 'auth.api'], function () {
Route::post('/lecturers/register', 'Api\LecturerController@store');
Route::post('/lecturers/login', 'Api\LecturerController@doLogin');
Route::post('/student/register', 'Api\StudentController@store');
Route::post('/student/checkmac', 'Api\StudentController@checkMacAddress');
Route::post('/s_course/register', 'Api\Student_CoursesController@store');
Route::post('/l_course/register', 'Api\Lecturer_CoursesController@store');
Route::post('/course/register', 'Api\CoursesController@store');
Route::post('/presence/register', 'Api\PresenceController@store');
Route::post('/level/register', 'Api\LevelController@store');

});



Route::group(['prefix' => '/v1.1/attendance_4pi/', 'middleware' => 'auth.api'], function () {
Route::get('/lecturers/index', 'Api\LecturerController@index');
Route::get('/student/index', 'Api\StudentController@index');
Route::get('/s_course/index', 'Api\Student_CoursesController@index');
Route::get('/l_course/index', 'Api\Lecturer_CoursesController@index');
Route::get('/course/index', 'Api\CoursesController@index');
Route::get('/level/index', 'Api\LevelController@index');
Route::get('/presence/index', 'Api\PresenceController@index');

});




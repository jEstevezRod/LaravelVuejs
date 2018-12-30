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

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/web', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/tasks', '\App\Http\Controllers\TaskController@store');
Route::get('/tasks', '\App\Http\Controllers\TaskController@index');
Route::put('/tasks/{id}/{information}', '\App\Http\Controllers\TaskController@updates');

Route::get('/states','\App\Http\Controllers\StateController@index');
Route::post('/states','\App\Http\Controllers\StateController@store');

Route::get('/projects','\App\Http\Controllers\ProjectController@index');
Route::post('/projects','\App\Http\Controllers\ProjectController@store');
Route::get('/projects/{id}', '\App\Http\Controllers\ProjectController@show');

Route::get('/teams','\App\Http\Controllers\TeamController@index');
Route::post('/teams','\App\Http\Controllers\TeamController@store');

Route::get('/userInProject', '\App\Http\Controllers\ProjectUserController@index');
Route::post('/userInProject', '\App\Http\Controllers\ProjectUserController@store');

Route::get('/userInTeam', '\App\Http\Controllers\TeamMemberController@index');
Route::post('/userInTeam', '\App\Http\Controllers\TeamMemberController@store');


<?php

use Illuminate\Support\Facades\Route;
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



// events
Route::get('events', 'App\Http\Controllers\EventsController@index');
Route::get('events/{id}', 'App\Http\Controllers\EventsController@show');

// users
Route::get('users', 'App\Http\Controllers\UsersController@index');
Route::get('users/{id}', 'App\Http\Controllers\UsersController@show');



// trophy challenge EASY: Create an endpoint to filter events by category:
Route::get('events/{category}', 'App\Http\Controllers\EventsController@show');

// trophy challenge MEDUIM: Create an endpoint to create an event:
Route::get('event/create','App\Http\Controllers\EventsController@create');
Route::post('event/store','App\Http\Controllers\EventsController@store');



// trophy challenge HARD: Create a relation between user and event
Route::get('user/{id}/events', 'App\Http\Controllers\UsersController@show_user_events');

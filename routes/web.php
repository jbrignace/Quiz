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
Route::get('/', '\App\Http\Controllers\Controller@home');
Route::get('/start_quiz', '\App\Http\Controllers\Controller@start_quiz');
Route::get('/question/{question:slug}', '\App\Http\Controllers\Controller@get_question');
Route::post('check_answer', '\App\Http\Controllers\Controller@check_answer');




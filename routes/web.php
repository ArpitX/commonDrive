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

Route::get('/', 'InstitutesController@landing')->name('home');
Route::get('/institutes', 'InstitutesController@landing');
Route::get('/all-institutes', 'InstitutesController@index');
Route::get('/institutes/{id}', 'InstitutesController@show');
Route::post('/institutes', 'InstitutesController@view');
Route::post('/institutes/{id}/subject', 'SubjectsController@store');
Route::get('/institutes/{inst}/subject/{subject}', 'SubjectsController@show');
Route::post('/institutes/{inst}/subject/{subject}/upload', 'FilesController@store');
Route::get('/new-institute', 'InstitutesController@newCollege');

//Auth::routes()
Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@store');
Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/forgot-password', 'Auth\ForgotPasswordController@show');
Route::post('/forgot-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/reset-password', 'Auth\ResetPasswordController@showResetForm');
Route::post('/reset-password', 'Auth\ResetPasswordController@reset');

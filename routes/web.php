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

Auth::routes();

Route::get('/', "PagesController@homepage");

Route::get('apply', "PagesController@apply")->name('apply')->middleware('auth');
Route::post('apply', "PagesController@postApply")->name('apply')->middleware('auth');

Route::resource('applications', 'App\\ApplicationsController');
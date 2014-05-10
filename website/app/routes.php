<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PageController@showHome');
Route::get('/about', 'PageController@showAbout');
Route::get('/jobs', 'PageController@showJobs');

Route::get('/contact', 'ContactController@showContact');
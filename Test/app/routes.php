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
Route::get('home',array('as'=>'home','uses'=>'QuestionController@get_index'));
Route::get('register',array('as'=>'register','uses'=>'EmployeeController@get_new'));
Route::post('register',array('before' => 'csrf' , 'uses' => 'EmployeeController@post_create'));
Route::post('home',array('as'=>'home','uses'=>'EmployeeController@get_login'));

Route::get('dashboard',array('as'=>'dashboard','uses'=>'DashboardController@get_new'));

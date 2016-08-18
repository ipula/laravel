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
Route::filter('auth', function() {
    if (Auth::guest()) {
        return Redirect::guest('login');
    }
});

Route::get('home',array('as'=>'home','uses'=>'QuestionController@get_index'));
Route::get('register',array('as'=>'register','uses'=>'EmployeeController@get_new'));
Route::post('register',array('before' => 'csrf' , 'uses' => 'EmployeeController@post_create'));
Route::post('home',array('as'=>'home','uses'=>'EmployeeController@get_login'));

Route::get('dashboard',array('as'=>'dashboard','uses'=>'DashboardController@get_new'));
Route::get('logout',array('as'=>'logout','uses'=>'EmployeeController@get_logout'));

Route::get('profile',array('as'=>'profile','uses'=>'ProfileController@get_profile'));

Route::get('forgetpassword',array('as'=>'forgetpassword','uses'=>'ForgetpwdController@get_forgetPwd'));
Route::get('resetpassword',array('as'=>'resetpassword','uses'=>'ResetpwdController@get_resetPwd'));

Route::post('profile',array('as'=>'profile','uses'=>'EmployeeController@reset_pwd'));

//Route::get('EmployeeDetails',array('as'=>'EmpDetails','uses'=>'TableController@get_table'));
Route::get('EmployeeDetails',array('as'=>'EmpDetails','uses'=>'TableController@get_details'));
Route::get('edit_emp/{id}',array('as'=>'edit_emp','uses'=>'TableController@edit_employee'));


Route::post('edit_emp/{id}',array('before' => 'csrf','uses'=>'TableController@update_detail'));
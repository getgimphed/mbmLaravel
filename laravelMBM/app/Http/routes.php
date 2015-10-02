<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'designing@index');  //front end designing

Route::get('signIn','SignInController@index');
Route::get('signIn/{id}','SignInController@siginForm');
Route::get('register','SignInController@registerIndex');
Route::get('register/{id}','SignInController@registerUserForm');
Route::post('register/{id}','SignInController@register');

Route::get('postSignIn/completeProfile','postSignIn@completeProfileForm');
Route::get('postSignIn/{id}','postSignIn@index');
Route::post('postSignIn/completeProfile','postSignIn@completeProfileStore');
Route::get('postSignIn',function(){return redirect('/signIn');});
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

Route::get('/home','WelcomeController@index');

Route::get('/contact',function(){
   return View('contact');
});

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

<?php

use Illuminate\Support\Facades\Route;

Route::namespace('User')->group(function () {

    Route::namespace('Auth')->middleware(['guest'])->group(function () {

        Route::get('/login','AuthController@show_login_form')->name('login');
        Route::get('/register','AuthController@show_signup_form')->name('register');
        Route::post('/register','AuthController@process_signup');
    
    });

    Route::get('/','HomeController@show_home_page')->name('home');
   
});

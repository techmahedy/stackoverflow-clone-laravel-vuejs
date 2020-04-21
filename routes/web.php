<?php

use Illuminate\Support\Facades\Route;

Route::namespace('User')->group(function () {

    Route::namespace('Auth')->group(function () {
        
        // Login and register routes
        Route::get('/login','AuthController@show_login_form')->name('login');
        Route::post('/login','AuthController@process_login')->name('login');
        Route::get('/register','AuthController@show_signup_form')->name('register');
        Route::post('/register','AuthController@process_signup');
        Route::post('/logout','AuthController@logout')->name('logout');
    });

    //Verification routes
    Route::get('/verify/{token}', 'VerifyController@VerifyEmail')->name('verify');

    // Ask question routes
    Route::get('/ask','QuestionController@show_question_form')->name('question.ask');
    Route::post('/ask','QuestionController@ask_question');

    //Home page and single routes
    Route::get('/','HomeController@show_home_page')->name('home');
    Route::get('/user/{username}/question/{slug}','HomeController@question')->name('single');
    
    //Like and disliek route
    Route::post('/like','LikeController@hit_like')->name('like');
    Route::get('/like/{id}','LikeController@load_all_like');
    Route::post('/dislike','LikeController@hit_dislike')->name('dislike');
    Route::get('/dislike/{id}','LikeController@load_all_dislike');

});

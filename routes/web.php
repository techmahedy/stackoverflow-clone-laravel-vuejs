<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('newpost');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/signup', function () {
    return view('signup');
});
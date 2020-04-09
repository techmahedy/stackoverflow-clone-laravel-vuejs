<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_home_page()
    {
        if (View::exists('home')) {
            
            return view('home');

        }
    } 
}

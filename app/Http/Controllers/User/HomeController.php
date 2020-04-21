<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function show_home_page()
    {   
        $questions = Question::with('user')->latest()->get();
        
        return view('home', compact('questions'));
    } 

    public function question(User $username, Question $slug)
    {
        return view('forum.single.single',compact('slug'));
    }
}

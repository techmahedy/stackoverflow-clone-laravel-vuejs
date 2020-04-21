<?php

namespace App\Http\Controllers\User;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class QuestionController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_question_form()
    {
        if (View::exists('forum.ask.question')) {
            
            return view('forum.ask.question');

        }
    }

    public function ask_question(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:20',
            'description' => 'required|min:30',
        ]);
       
       $userId = auth()->user()->id;
    
       $question = new Question;
       $question->title = $request->title;
       $question->slug = \Str::slug($request->title);
       $question->description = $request->description;
       $question->user_id = $userId;
       $question->save();

       return response()->json([
           'message' => "success"
       ]);
    }
}

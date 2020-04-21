<?php

namespace App\Http\Controllers\User;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function hit_like(Request $request)
   {  
      $question = Question::findOrFail($request->id);
      $question->like = $question->like + 1;
      $question->save();
     
      return response()->json([
          "success" => "Thanks!"
      ]);
   }

   public function load_all_like($id)
   {
     $question = Question::findOrFail($id);

        return response()->json([
            "question" => $question
        ]);
   }

   public function hit_dislike(Request $request)
   {  
      $question = Question::findOrFail($request->id);
      $question->dislike = $question->dislike + 1;
      $question->save();

      return response()->json([
          "question" => $question
      ]);
   }

   public function load_all_dislike($id)
   {
     $question = Question::findOrFail($id);

        return response()->json([
            "question" => $question
        ]);
   }

}

<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show_login_form()
    {
        if (View::exists('forum.auth.login')) {
            
            return view('forum.auth.login');

        }
    }

    public function show_signup_form()
    {
        if (View::exists('forum.auth.register')) {
            
            return view('forum.auth.register');

        }
    }

    public function process_signup(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
            'avatar' => 'required'
        ]);

        return $request->all();

    }
}

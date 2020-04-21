<?php

namespace App\Http\Controllers\User\Auth;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
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

        if($request->avatar){

            $name = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos($request->avatar, ';')))[1])[1];
            \Image::make($request->avatar)->save(public_path('img/profile/').$name);
            $request->merge(['avatar' => $name]);
           
        }
        
        $user = new User;
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->username = $request->username;
        $user->avatar = $name;
        $user->email = strtolower($request->email);
        $user->password = $request->password;
        $user->email_verification_token = \Str::random(32);
        $user->save();
        
        \Mail::to($user->email)->send(new \App\Mail\VerificationEmail($user));

        return response()->json(
            [
                'success' => true,
                'message' => 'We have sent you a email with activation link. Please activate your account after email verification.'
            ]
        );

    }

    public function process_login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->all();

        $user = User::where('username',$request->username)->first();
     
        if($user->email_verified == 1){

        if (auth()->attempt($credentials)) {

                 $user = auth()->user();

                 $user->last_login = Carbon::now();

                 $user->save();

                 return "<script> window.location.href = '/'; </script>";
                
            }
           
        }

        return response()->json(
            [
                'success' => true,
                'message' => 'Invalid credentials'
            ]
        );
    
    }

    public function logout()
    {
        \Auth::logout();
         return redirect('/login');
    }
}

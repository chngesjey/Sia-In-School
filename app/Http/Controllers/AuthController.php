<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use DB;
use Str;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }
    public function simpanRegister(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token'=> Str::random(20),
        ]); 

        return view('auth.index');
    }

}

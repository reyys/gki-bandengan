<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function register() {
        return view("auth.register");
    }   

    public function registerStore(Request $request) {
        $request->validate([
            "name" => "required|min:4|max:30|string",
            "email" => "required|email|unique:users",
            "password" => ["required","confirmed",Password::defaults()]
        ]);


        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);



        Auth::login($user);

        return to_route("courses.index");

    }

    public function login() {
        return view("auth.login");
    }

    public function loginStore(Request $request) {
        $revalidate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',"min:8","string"],
        ]);
 
        if (Auth::attempt($revalidate)) {
            $request->session()->regenerate();
            return redirect()->intended('courses.index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

}

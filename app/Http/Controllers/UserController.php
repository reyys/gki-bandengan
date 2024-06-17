<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function showRegister() {
        return view("auth.register");
    }

    public function register(Request $request) {
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

        $user->createToken("auth-token")->plainTextToken;

        dispatch(new ProcessMail(["email" => $request->email,"name" => auth()->user()->name]));

        return to_route("dashboard.home");

    }

    public function showLogin() {
        return view("auth.login");
    }

    public function login(Request $request) {
        $revalidate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',"min:8","string"],
        ]);
 
        if (Auth::attempt($revalidate)) {
            $request->user()->createToken("auth-token")->plainTextToken;
            return to_route("dashboard.home");
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();
        return redirect('/');
    }

}

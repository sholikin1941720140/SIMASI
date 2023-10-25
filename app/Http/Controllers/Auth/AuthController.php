<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:20'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('layouts.app');
        }
        return redirect()->route('login')->withErrors('Invalid credentials');
    }

    public function dashboard()
    {
        // if(Auth::check()) {
        //     return view('dashboard');
        // }
        // return redirect()->route('login')->withSuccess('You are not allowed to access');
        return view('layouts.app');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flush();
        return redirect()->route('login')->withSuccess('You are logged out');
    }
}
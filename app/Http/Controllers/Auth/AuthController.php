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
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:20'
        ]);

        if(Auth::attempt([
            'email' => $request->get('email'), 
            'password' => $request->get('password')
        ])) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->withErrors('Maaf anda tidak bisa login');
    }

    public function dashboard()
    {
        // if(Auth::check()) {
        //     return view('dashboard');
        // }
        // return redirect()->route('login')->withSuccess('You are not allowed to access');
        return view('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flush();
        return redirect()->route('login')->withSuccess('You are logged out');
    }
}
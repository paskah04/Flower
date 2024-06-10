<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Menggunakan default guard 'web'
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin');
        } else {
            return redirect(route('auth.index'))->with('pesan', 'Kombinasi email dan password salah');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        // Menggunakan default guard 'web'
        Auth::logout();
        return redirect(route('auth.index'));
    }
}

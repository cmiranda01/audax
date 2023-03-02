<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // La autenticación ha sido exitosa
            return redirect()->intended('/contratos');
        }
        
        // La autenticación ha fallado
        return redirect()->back()->withErrors([
            'email' => 'Las credenciales no son correctas.',
        ]);
    }
}


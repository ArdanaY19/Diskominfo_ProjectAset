<?php

namespace App\Http\Controllers;

use Redirect; 
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('logout', 'Anda yakin ingin keluar ?');
    }
}

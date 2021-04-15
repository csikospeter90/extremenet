<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/admin');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/admin');
        }
        return redirect()->back()->withErrors(['rossz felhasználónév jelszó páros']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}

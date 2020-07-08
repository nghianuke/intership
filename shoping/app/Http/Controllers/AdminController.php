<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('admin');
        } else {
            return view('auth.login');
        }

    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}

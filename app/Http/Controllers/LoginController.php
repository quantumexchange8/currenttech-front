<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function loginview()
    {
        return view('login.login');
    }

    public function register()
    {
        return view('register.register');
    }
}

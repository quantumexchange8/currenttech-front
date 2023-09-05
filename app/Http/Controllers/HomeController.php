<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('master.home');
    }

    public function support()
    {
        return view('master.support');
    }
}

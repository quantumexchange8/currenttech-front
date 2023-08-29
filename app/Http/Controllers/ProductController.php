<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function pos()
    {
        return view('master.pos');
    }

    public function webapp()
    {
        return view('master.webapp');
    }

    public function broker()
    {
        return view('master.broker');
    }

    public function expert()
    {
        return view('master.expert');
    }

    public function web3()
    {
        return view('master.web3');
    }
}

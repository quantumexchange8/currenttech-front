<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function pos()
    {
        return view('master.product.pos');
    }

    public function webapp()
    {
        return view('master.product.webapp');
    }

    public function seeall()
    {
        return view('master.product.seeall');
    }

    public function broker()
    {
        return view('master.product.broker');
    }

    public function expert()
    {
        return view('master.product.expert');
    }

    public function web3()
    {
        return view('master.product.web3');
    }

    public function productDetails()
    {
        return view('master.product.details');
    }
}

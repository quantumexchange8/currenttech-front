<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //

    public function performance()
    {
        return view('master.feature.performance');
    }

    public function reward()
    {
        return view('master.feature.reward');
    }

    public function develop()
    {
        return view('master.feature.develop');
    }

    public function hrmanage()
    {
        return view('master.feature.hr');
    }

    public function report()
    {
        return view('master.feature.report');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArVersionController extends Controller
{
    public function index()
    {
        return view('front.home.indexAR');
    }

}

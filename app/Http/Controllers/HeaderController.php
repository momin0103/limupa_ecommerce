<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function about()
    {
        return view('front.header.about');
    }

    public function contact()
    {
        return view('front.header.contact');
    }
}

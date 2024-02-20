<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contactShow()
    {
        return view('pages.contact');
    }
}

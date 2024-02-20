<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function showAbout(){
        return view('pages.about');
    }
}

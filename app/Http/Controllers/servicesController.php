<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function showServices()
    {
        return view('pages.services');
    }
}

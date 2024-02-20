<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function projectShow()
    {
        return view('pages.project');
    }
}

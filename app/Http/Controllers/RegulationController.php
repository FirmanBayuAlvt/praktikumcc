<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index(Request $request)
    {
        return view('regulation');
    }

    public function getApiData()
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrowthController extends Controller
{
    public function index(Request $request)
    {
        return view('growth');
    }

    public function getApiData()
    {

    }
}

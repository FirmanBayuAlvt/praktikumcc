<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class PkkController extends Controller
{
    public function index(Request $request)
    {
        return view('pkk');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('pkkStaff')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/pkk')
        ]);

        $data = [
            'pkkStaff' => $responses['pkkStaff']->ok() ? $responses['pkkStaff']->json() : null,
        ];

        return response()->json($data);
    }
}

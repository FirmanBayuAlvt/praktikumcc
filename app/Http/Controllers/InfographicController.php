<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class InfographicController extends Controller
{
    public function index(Request $request)
    {
        return view('infographic');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('infographic')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/infografis'),
        ]);

        $data = [
            'infographic' => $responses['infographic']->ok() ? $responses['infographic']->json() : null,
        ];

        return response()->json($data);
    }
}

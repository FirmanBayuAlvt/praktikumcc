<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class InnovationController extends Controller
{
    public function index(Request $request)
    {
        return view('innovation');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('innovation')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/inovasi'),
        ]);

        $data = [
            'innovation' => $responses['innovation']->ok() ? $responses['innovation']->json() : null,
        ];

        return response()->json($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class AssistanceController extends Controller
{

    public function index(Request $request)
    {
        return view('assistance');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('assistance')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/bansos'),
        ]);

        $data = [
            'assistance' => $responses['assistance']->ok() ? $responses['assistance']->json() : null,
        ];

        return response()->json($data);
    }
}

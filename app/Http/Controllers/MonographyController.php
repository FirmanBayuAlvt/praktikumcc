<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class MonographyController extends Controller
{
    public function index(Request $request)
    {
        return view('monography');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('monograph')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/monografi'),
        ]);

        $data = [
            'monograph' => $responses['monograph']->ok() ? $responses['monograph']->json() : null,
        ];

        return response()->json($data);
    }
}

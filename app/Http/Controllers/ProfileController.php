<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('history')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/sejarah'),
        ]);

        $data = [
            'history' => $responses['history']->ok() ? $responses['history']->json() : null,
        ];

        return response()->json($data);
    }
}

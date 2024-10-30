<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class OpdController extends Controller
{
    public function index(Request $request)
    {
        return view('opd');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('opdDinas')->get(env('WEB_EXT_API_URL').'opd')
        ]);

        $data = [
            'opdDinas' => $responses['opdDinas']->ok() ? $responses['opdDinas']->json() : null,
        ];

        return response()->json($data);
    }
}

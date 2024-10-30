<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class CooperationController extends Controller
{
    public function index(Request $request)
    {
        return view('cooperation');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            // $pool->as('cooperation')->get(env('WEB_EXT_API_URL_TUS').'pemerintahan/kemitraan')
            $pool->as('cooperation')->get('https://raw.githubusercontent.com/purnamaanaking/pab-static-api/main/cooperation.json')
        ]);

        $data = [
            'cooperation' => $responses['cooperation']->ok() ? $responses['cooperation']->json() : null,
        ];

        return response()->json($data);
    }
}

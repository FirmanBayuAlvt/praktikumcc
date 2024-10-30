<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class AchievementController extends Controller
{
    public function index(Request $request)
    {
        return view('achievement');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            // $pool->as('achievement')->get(env('WEB_EXT_API_URL_TUS').'prestasi')
            $pool->as('achievement')->get('https://raw.githubusercontent.com/purnamaanaking/pab-static-api/main/achievement.json')
        ]);

        $data = [
            'achievement' => $responses['achievement']->ok() ? $responses['achievement']->json() : null,
        ];

        return response()->json($data);
    }
}

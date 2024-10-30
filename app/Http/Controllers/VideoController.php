<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        return view('video');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('actVideo')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/video-kegiatan'),
        ]);

        $data = [
            'actVideo' => $responses['actVideo']->ok() ? $responses['actVideo']->json() : null,
        ];

        return response()->json($data);
    }
}

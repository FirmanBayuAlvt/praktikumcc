<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class TourController extends Controller
{
    public function index(Request $request)
    {
        return view('tour');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('gallery')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/galeri-wisata'),
            $pool->as('packet')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/paket-wisata'),
        ]);

        $data = [
            'gallery' => $responses['gallery']->ok() ? $responses['gallery']->json() : null,
            'packet' => $responses['packet']->ok() ? $responses['packet']->json() : null,
        ];

        return response()->json($data);
    }
}

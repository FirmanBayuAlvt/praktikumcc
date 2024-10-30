<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        return view('community');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('institutionAmount')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/tomas/jumlah-lembaga'),
            $pool->as('institutionLead')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/tomas/ketua-lembaga'),
        ]);

        $data = [
            'institutionAmount' => $responses['institutionAmount']->ok() ? $responses['institutionAmount']->json() : null,
            'institutionLead' => $responses['institutionLead']->ok() ? $responses['institutionLead']->json() : null,
        ];

        return response()->json($data);
    }
}

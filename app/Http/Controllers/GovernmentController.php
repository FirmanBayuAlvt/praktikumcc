<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class GovernmentController extends Controller
{
    public function index(Request $request)
    {
        return view('government');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('structuralStaff')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/pemerintahan/pegawai/struktural'),
            $pool->as('visionMission')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/visi-misi'),
            $pool->as('govStaff')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/pemerintahan/pegawai'),
        ]);

        $data = [
            'structuralStaff' => $responses['structuralStaff']->ok() ? $responses['structuralStaff']->json() : null,
            'visionMission' => $responses['visionMission']->ok() ? $responses['visionMission']->json() : null,
            'govStaff' => $responses['govStaff']->ok() ? $responses['govStaff']->json() : null,
        ];

        return response()->json($data);
    }
}

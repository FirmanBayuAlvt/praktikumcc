<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('genderDemography')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/demografi/jenis-kelamin'),
            $pool->as('rtRwLpmk')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/tomas/jumlah-lembaga'),
            $pool->as('structuralStaff')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/pemerintahan/pegawai/struktural'),
            $pool->as('actVideo')->get(env('WEB_EXT_API_URL_TUS').env('WEB_SLUG').'/video-kegiatan'),
        ]);

        $data = [
            'genderDemography' => $responses['genderDemography']->ok() ? $responses['genderDemography']->json() : null,
            'rtRwLpmk' => $responses['rtRwLpmk']->ok() ? $responses['rtRwLpmk']->json() : null,
            'structuralStaff' => $responses['structuralStaff']->ok() ? $responses['structuralStaff']->json() : null,
            'actVideo' => $responses['actVideo']->ok() ? $responses['actVideo']->json() : null,
        ];

        return response()->json($data);
    }
}

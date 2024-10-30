<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class RegionController extends Controller
{
    public function index(Request $request)
    {
        return view('region');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('pantiSosial')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20panti%20sosial'),
            $pool->as('komunikasi')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20komunikasi'),
            $pool->as('perhubungan')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=prasarana%20perhubungan'),
            $pool->as('kesehatan')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20kesehatan'),
            $pool->as('industri')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20industri%20dan%20perdagangan'),
            $pool->as('olahraga')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20olahraga'),
            $pool->as('keagamaan')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20keagamaan'),
            $pool->as('kebudayaan')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20kebudayaan'),
            $pool->as('nonFormal')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20pendidikan%20non%20formal'),
            $pool->as('pariwisata')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20pariwisata'),
            $pool->as('formal')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/fasilitas-publik?kategori=sarana%20pendidikan%20formal'),
        ]);

        $data = [
            'pantiSosial' => $responses['pantiSosial']->ok() ? $responses['pantiSosial']->json() : null,
            'komunikasi' => $responses['komunikasi']->ok() ? $responses['komunikasi']->json() : null,
            'perhubungan' => $responses['perhubungan']->ok() ? $responses['perhubungan']->json() : null,
            'kesehatan' => $responses['kesehatan']->ok() ? $responses['kesehatan']->json() : null,
            'industri' => $responses['industri']->ok() ? $responses['industri']->json() : null,
            'olahraga' => $responses['olahraga']->ok() ? $responses['olahraga']->json() : null,
            'keagamaan' => $responses['keagamaan']->ok() ? $responses['keagamaan']->json() : null,
            'kebudayaan' => $responses['kebudayaan']->ok() ? $responses['kebudayaan']->json() : null,
            'nonFormal' => $responses['nonFormal']->ok() ? $responses['nonFormal']->json() : null,
            'pariwisata' => $responses['pariwisata']->ok() ? $responses['pariwisata']->json() : null,
            'formal' => $responses['formal']->ok() ? $responses['formal']->json() : null,
        ];

        return response()->json($data);
    }
}

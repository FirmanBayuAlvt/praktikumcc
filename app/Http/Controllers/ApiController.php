<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public static function getBaseApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('generalDesc')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/gambaran-umum'),
            $pool->as('socialMedia')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/sosial-media'),
        ]);

        $data = [
            'generalDesc' => $responses['generalDesc']->ok() ? $responses['generalDesc']->json() : null,
            'socialMedia' => $responses['socialMedia']->ok() ? $responses['socialMedia']->json() : null,
        ];

        return response()->json($data);
    }

    public static function getGeneralDescription()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/gambaran-umum';
        $response = Http::timeout(60)->get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getHistory()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/sejarah';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getSocialMedia()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/sosial-media';
        $response = Http::timeout(60)->get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getStructuralStaff()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/pemerintahan/pegawai/struktural';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getStaff()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/pemerintahan/pegawai';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getGenderDemography()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/kewilayahan/demografi/jenis-kelamin';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getAgeDemography()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/kewilayahan/demografi/usia';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getEducationDemography()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/kewilayahan/demografi/pendidikan';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getJobDemography()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/kewilayahan/demografi/pekerjaan';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getReligionDemography()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/kewilayahan/demografi/agama';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getRtRwLpmk()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/tomas/jumlah-lembaga';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getPkk()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/'.env('WEB_SLUG').'/pkk';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public static function getOpd()
    {
        $endpoint = 'https://pemerintahan.surabaya.go.id/basis-data/api/opd';
        $response = Http::get($endpoint);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}

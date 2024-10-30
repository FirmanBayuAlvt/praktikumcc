<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class DemographyController extends Controller
{
    public function index(Request $request)
    {
        return view('demography');
    }

    public function getApiData()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->as('genderDemography')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/demografi/jenis-kelamin'),
            $pool->as('ageDemography')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/demografi/usia'),
            $pool->as('educationDemography')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/demografi/pendidikan'),
            $pool->as('jobDemography')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/demografi/pekerjaan'),
            $pool->as('religionDemography')->get(env('WEB_EXT_API_URL').env('WEB_SLUG').'/kewilayahan/demografi/agama'),
        ]);

        $data = [
            'genderDemography' => $responses['genderDemography']->ok() ? $responses['genderDemography']->json() : null,
            'ageDemography' => $responses['ageDemography']->ok() ? $responses['ageDemography']->json() : null,
            'educationDemography' => $responses['educationDemography']->ok() ? $responses['educationDemography']->json() : null,
            'jobDemography' => $responses['jobDemography']->ok() ? $responses['jobDemography']->json() : null,
            'religionDemography' => $responses['religionDemography']->ok() ? $responses['religionDemography']->json() : null,
        ];

        return response()->json($data);
    }
}

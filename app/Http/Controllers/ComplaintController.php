<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComplaintController extends Controller
{
    public function index(Request $request)
    {
        return view('complaint');
    }

    public function getApiData() {}

    public function submit(Request $request)
    {
        $data = [
            'nama_pengadu' => $request->fullname,
            'nik' => $request->nik,
            'alamat' => $request->address,
            'no_hp' => $request->phone,
            'aduan' => $request->complain_text,
        ];

        $baseUrl = env('WEB_EXT_API_URL');
        $slug = env('WEB_SLUG');
        $endpoint = '/create-pengaduan';

        $fullUrl = $baseUrl . '/' . $slug . $endpoint;

        $response = Http::post($fullUrl, $data);
        // dd([
        //     'status' => $response->status(),
        //     'body' => $response->body(),
        //     'headers' => $response->headers()
        // ]);

        if ($response->successful()) {
            return redirect()->route('complaint')->with('success', 'Pengaduan berhasil dikirim');
        } else {
            return redirect()->back()->withErrors('Pengaduan gagal dikirim, silakan coba lagi.');
        }
    }
}

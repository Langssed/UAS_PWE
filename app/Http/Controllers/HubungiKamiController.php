<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class HubungiKamiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:50',
            'pesan' => 'required|string',
        ]);

        Pesan::create($request->all());

        return response()->json(['message' => 'Pesan berhasil dikirim.'], 200);
    }
}
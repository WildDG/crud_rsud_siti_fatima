<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class PasienController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Pasien::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        return response()->json([
            'message' => 'Berhasil Menyimpan Data ...',
            'error' => false,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return Pasien::whereNull('created_at')->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return Pasien::findOrFail($request->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Pasien::findOrFail($request->id);

        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tanggal_lahir;

        return response()->json([
            'message' => 'Berhasil Update Data ...',
            'error' => false,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $data = Pasien::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'message' => 'Berhasil Hapus Data ...',
            'error' => false,
        ]);
    }
}

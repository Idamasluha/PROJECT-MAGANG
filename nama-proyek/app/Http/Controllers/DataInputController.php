<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataInputController extends Controller
{
    public function showForm()
    {
        return view('data-input');
    }

    public function storeData(Request $request)
    {
        // Validasi dan simpan data
        $validatedData = $request->validate([
            'nomor_urut' => 'required',
            'no_berkas' => 'required',
            'alamat_penerimaan' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'nomor_petunjuk' => 'required',
            'nomor' => 'required',
        ]);

        // Proses penyimpanan data ke database bisa ditambahkan di sini

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

}


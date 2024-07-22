<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use Illuminate\Routing\Controller;

class MobilController extends Controller
{
    public function show()
    {
        $kendaraan = Mobil::all();
        return view('mobil', compact('kendaraan'));
    }

    public function showMobil()
    {
        $kendaraanMobil = Mobil::all();
        return view('tampilMobil', compact('kendaraanMobil'));
    }

    public function create()
    {
        return view('mobil.store');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required|string|max:50',
            'tempat_duduk' => 'required|int|max:10',
            'bagasi' => 'required|string|max:50',
            'transmisi' => 'required|string|max:20',
            'bahan_bakar' => 'required|string|max:20',
            'status' => 'required|string|max:20',
        ]);

        Mobil::create($request->all());
        return redirect()->route('adminMobil')->with('success', 'Mobil Berhasil Ditambahkan');
    }
}


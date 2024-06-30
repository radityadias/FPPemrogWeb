<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('frontend.pemesanan', compact('pemesanan'));
    }

    public function create()
    {
        return view('pemesanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pemesanan',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
            'mobil' => 'required',
            
        ],[
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'email.unique' => 'Email sudah terdaftar',
            'alamat.required' => 'Alamat harus diisi',
            'nomor_hp.required' => 'Nomor HP harus diisi',
            'tgl_pinjam.required' => 'Tanggal Pinjam harus diisi',
            'tgl_kembali.required' => 'Tanggal Kembali harus diisi',
            'mobil.required' => 'Mobil harus diisi',    

        ] );

        Pemesanan::create($request->all());

        return redirect()->route('pemesanan')->with('success', 'Pemesanan Created Successfully');
    }

//     public function show(Pemesanan $pemesanan)
//     {
//         return view('pemesananForm.show', compact('pemesanan'));
//     }

//     public function destroy(Pemesanan $pemesanan)
//     {
//         $pemesanan->delete();

//         return redirect()->route('pemesananFOrm.index')->with('success', 'Pemesanan deleted successfully.');
//     }
// }
}
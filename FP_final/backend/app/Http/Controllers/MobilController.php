<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil; // Menggunakan model Mobil
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller;

class MobilController extends Controller
{
    /**
     * Menampilkan daftar mobil.
     */
    public function index()
    {
        $mobils = Mobil::orderBy('created_at', 'DESC')->get(); // Mengambil data mobil dan mengurutkannya berdasarkan created_at

        return view('mobils.index', compact('mobils')); // Menampilkan view 'mobils.index' dengan data mobil yang sudah diambil
    }

    /**
     * Menampilkan form untuk membuat mobil baru.
     */
    public function create()
    {
        return view('mobils.create'); // Menampilkan view 'mobils.create' untuk form tambah mobil
    }

    /**
     * Menyimpan mobil baru ke dalam database.
     */
    public function store(Request $request)
    {
       Mobil::create($request->all()); // Menyimpan data mobil baru ke dalam tabel 'mobils'

        return redirect()->route('mobils.index')->with('Sukses', 'Berhasil menambahkan mobil'); // Redirect ke halaman index mobil dengan pesan sukses
    }

    /**
     * Menampilkan detail mobil tertentu.
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id); // Mengambil data mobil berdasarkan ID

        return view('mobils.show', compact('mobil')); // Menampilkan view 'mobils.show' dengan data mobil yang sudah diambil
    }

    /**
     * Menampilkan form untuk mengedit data mobil.
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id); // Mengambil data mobil berdasarkan ID

        return view('mobils.edit', compact('mobil')); // Menampilkan view 'mobils.edit' dengan data mobil yang sudah diambil
    }

    /**
     * Mengupdate data mobil yang sudah ada di dalam database.
     */
    public function update(Request $request, $id)
    {
        $mobil = Mobil::findOrFail($id); // Mengambil data mobil berdasarkan ID

        $mobil->update($request->all()); // Melakukan update data mobil

        return redirect()->route('mobils.index')->with('success', 'Mobil updated successfully'); // Redirect ke halaman index mobil dengan pesan sukses
    }

    /**
     * Menghapus data mobil dari database.
     */
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id); // Mengambil data mobil berdasarkan ID

        $mobil->delete(); // Menghapus data mobil dari tabel

        return redirect()->route('mobils.index')->with('success', 'Mobil deleted successfully'); // Redirect ke halaman index mobil dengan pesan sukses
    }
}

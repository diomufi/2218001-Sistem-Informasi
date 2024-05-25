<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OwnerCat;
use App\Pemilik;
use Barryvdh\DomPDF\Facade\Pdf;

class PemilikController extends Controller
{
    public function index()
    {
        // Mengambil semua data pemilik kucing dari database
        $owners = OwnerCat::all();

        // Mengirim data ke view 'data-pemilik.blade.php'
        return view('Pemilik.data-pemilik', compact('owners'));
    }

    public function exportpdf()
    {
        $owners = OwnerCat::all();
        $pdf = PDF::loadView('Pemilik.cetak-pemilik', compact('owners'));
        return $pdf->download('data-pemilik.pdf');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        // Simpan data pemilik baru ke dalam database
        OwnerCat::create($request->all());

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data pemilik berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        // Temukan data pemilik yang akan diperbarui
        $owner = OwnerCat::findOrFail($id);

        // Perbarui data pemilik dengan data baru
        $owner->update($request->all());

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data pemilik berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan data pemilik yang akan dihapus
        $owner = OwnerCat::findOrFail($id);

        // Hapus data pemilik dari database
        $owner->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data pemilik berhasil dihapus.');
    }
}

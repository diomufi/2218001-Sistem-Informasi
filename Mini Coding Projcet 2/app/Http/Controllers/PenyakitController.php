<?php

// app/Http/Controllers/PenyakitController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('penyakit.data-penyakit', compact('penyakits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_penyakit' => 'required|unique:penyakit',
            'nama_penyakit' => 'required',
            'nama_latin' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        Penyakit::create($request->all());
        return redirect()->back()->with('success', 'Data penyakit berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_penyakit' => 'required|unique:penyakit,kode_penyakit,' . $id,
            'nama_penyakit' => 'required',
            'nama_latin' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $penyakit = Penyakit::findOrFail($id);
        $penyakit->update($request->all());
        return redirect()->back()->with('success', 'Data penyakit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();
        return redirect()->back()->with('success', 'Data penyakit berhasil dihapus.');
    }
}


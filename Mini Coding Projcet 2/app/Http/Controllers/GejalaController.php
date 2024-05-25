<?php

// app/Http/Controllers/GejalaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gejala;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('gejala.data-gejala', compact('gejalas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejalas',
            'nama_gejala' => 'required',
        ]);

        Gejala::create($request->all());
        return redirect()->back()->with('success', 'Gejala berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejalas,kode_gejala,' . $id,
            'nama_gejala' => 'required',
        ]);

        $gejala = Gejala::findOrFail($id);
        $gejala->update($request->all());
        return redirect()->back()->with('success', 'Gejala berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();
        return redirect()->back()->with('success', 'Gejala berhasil dihapus.');
    }
}


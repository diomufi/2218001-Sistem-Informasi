<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\OwnerCat;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::with('owner')->get();
        $owners = OwnerCat::all();
        return view('kucing.data-kucing', compact('cats', 'owners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'usia' => 'required|integer',
            'owner_id' => 'required|exists:ownercat,id',
        ]);

        Cat::create($request->all());
        return redirect()->back()->with('success', 'Data kucing berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'usia' => 'required|integer',
            'owner_id' => 'required|exists:ownercat,id',
        ]);

        $cat = Cat::findOrFail($id);
        $cat->update($request->all());

        return redirect()->back()->with('success', 'Data kucing berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $cat = Cat::findOrFail($id);
        $cat->delete();

        return redirect()->back()->with('success', 'Data kucing berhasil dihapus.');
    }
}

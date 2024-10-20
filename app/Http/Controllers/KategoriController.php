<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return Kategori::all();
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Simpan kategori baru
        $kategori = Kategori::create($request->all());

        return response()->json([
            'message' => 'Kategori berhasil ditambahkan!',
            'data' => $kategori
        ], 201);
    }

    public function show($id)
    {
        return Kategori::find($id);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->update($request->all());

        return response()->json([
            'message' => 'Kategori berhasil diperbarui!',
            'data' => $kategori
        ]);
    }

    public function destroy($id)
    {
        Kategori::destroy($id);
        return response()->json(['message' => 'Kategori berhasil dihapus!']);
    }
}

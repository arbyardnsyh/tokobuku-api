<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return Buku::with('kategori')->get();
    }

    public function store(Request $request)
    {
        // Validasi tambahan
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        return Buku::create($request->all());
    }

    public function show($id)
    {
        return Buku::with('kategori')->find($id);
    }

    public function update(Request $request, $id)
    {
        // Validasi tambahan
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer',
            'kategori_id' => 'exists:kategoris,id',
        ]);

        $buku = Buku::find($id);
        $buku->update($request->all());

        return $buku;
    }

    public function destroy($id)
    {
        return Buku::destroy($id);
    }

    public function search(Request $request)
    {
        $kategori = $request->input('kategori');

        // Mencari buku berdasarkan kategori
        $bukus = Buku::where('kategori', 'like', '%' . $kategori . '%')->get();

        return response()->json($bukus);
    }
}

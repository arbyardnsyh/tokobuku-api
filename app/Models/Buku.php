<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'harga', 'stok', 'kategori_id'];

    // Definisikan relasi ke model Kategori jika diperlukan
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->decimal('harga', 10, 2); // Menyimpan harga buku
            $table->integer('stok'); // Menyimpan stok buku
            $table->foreignId('kategori_id')->constrained('kategoris'); // Relasi ke kategori
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}

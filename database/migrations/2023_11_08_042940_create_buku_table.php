<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_kategori')->notNull()->references('id')->on('kategori_buku')->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul');
            $table->string('sinopsis');
            $table->string('penerbit');
            $table->char('tahun_terbit');
            $table->char('harga');
            $table->foreignId('id_penulis')->notNull()->references('id')->on('penulis')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};

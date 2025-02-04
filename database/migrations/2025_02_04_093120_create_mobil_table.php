<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id(); //kolom id (autoincrement)
            $table->string('merek'); //merek mobil, string
            $table->string('tahun_keluar'); //tahun keluar mobil, string
            $table->enum('jenis', ['lcgc', 'suv', 'sport'])->default('lcgc'); //jenis mobil
            $table->text('deskripsi'); //deskripsi, text (tulisan banyak)
            $table->timestamps(); //create_at & update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};

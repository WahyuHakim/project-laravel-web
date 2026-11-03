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
        Schema::create('kategori_layanan', function (Blueprint $table) {
    $table->id();
    $table->string('nama_kategori'); // cth: 'Tiket Pesawat'
    $table->string('slug')->unique(); // cth: 'tiket-pesawat'
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_layanan');
    }
};

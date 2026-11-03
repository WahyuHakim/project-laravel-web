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
        Schema::create('inventory_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('kategori_id')->constrained('kategori_layanan')->onDelete('cascade');
    $table->string('nama_item'); // cth: 'CGK - DPS (Garuda Indonesia)'
    $table->text('deskripsi_rute')->nullable();
    $table->dateTime('waktu_berangkat');
    $table->decimal('harga', 12, 2);
    $table->integer('stok_tiket'); // Kapasitas kursi
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
    }
};

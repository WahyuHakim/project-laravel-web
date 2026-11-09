
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tiket_bus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_po');
            $table->string('terminal_asal');
            $table->string('terminal_tujuan');
            $table->dateTime('waktu_berangkat');
            $table->decimal('harga', 12, 2);
            $table->unsignedInteger('stok_kursi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tiket_bus');
    }
};

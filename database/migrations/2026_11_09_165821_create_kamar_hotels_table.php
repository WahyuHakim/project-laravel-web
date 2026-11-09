
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kamar_hotel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hotel');
            $table->string('tipe_kamar');
            $table->text('fasilitas')->nullable();
            $table->decimal('harga_per_malam', 12, 2);
            $table->unsignedInteger('stok_kamar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kamar_hotel');
    }
};
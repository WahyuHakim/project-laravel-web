
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->foreignId('kupon_id')
                  ->nullable()
                  ->constrained('kupon_promo')
                  ->nullOnDelete();

            $table->decimal('total_harga', 12, 2);
            $table->string('status_pesanan');
            $table->dateTime('tanggal_pesan');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};

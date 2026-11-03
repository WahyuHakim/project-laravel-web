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
       Schema::create('kupon_promo', function (Blueprint $table) {
    $table->id();
    $table->string('kode_promo')->unique(); // cth: 'JALANDULU'
    $table->integer('diskon_persen');
    $table->decimal('maksimal_diskon', 12, 2);
    $table->date('berlaku_hingga');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kupon_promo');
    }
};

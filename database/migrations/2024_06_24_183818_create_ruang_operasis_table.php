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
        Schema::create('ruang_operasis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_ruang');
            $table->integer('lantai');
            $table->enum('tipe', ['umum', 'bedah', 'jantung']);
            $table->enum('status_ketersediaan', ['tersedia', 'terisi', 'perawatan'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruang_operasis');
    }
};

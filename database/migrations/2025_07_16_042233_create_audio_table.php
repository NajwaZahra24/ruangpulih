<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('audios', function (Blueprint $table) {
            $table->id();
            $table->string('judul_lagu');
            $table->string('durasi_lagu');
            $table->string('thumbnail')->nullable();
            $table->string('audio_file')->nullable(); // Ini sebaiknya required
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audios'); // Perbaikan: 'audio' -> 'audios'
    }
};
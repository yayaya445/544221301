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
        Schema::create('table_pasien', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pasien');
            $table->integer('umur_pasien');
            $table->text('penyakit_pasien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pasien');
    }
};

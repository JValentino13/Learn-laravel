<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_izin', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('kelas')->nullable();
            $table->string('izin')->nullable();
            $table->string('waktu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_izin');
    }
};

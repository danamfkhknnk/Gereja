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
        Schema::create('persembahans', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk tabel persembahan
            $table->foreignId('jadwal_id')->nullable()->constrained(); // Kolom berelasi dengan jadwal
            $table->foreignId('jemaat_id')->nullable()->constrained(); // Kolom berelasi dengan jemaat
            $table->enum('tipe', ['umum', 'perpuluhan', 'istimewa', 'syukur']); // Kolom tipe
            $table->string('jumlah',12); // Kolom jumlah dengan tipe decimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persembahans');
    }
};
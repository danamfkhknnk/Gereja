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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk tabel persembahan
            $table->foreignId('jadwal_id')->nullable()->constrained(); // Kolom berelasi dengan jadwal
            $table->foreignId('persembahan_id')->nullable()->constrained();
            $table->datetime('tanggal'); // Kolom berelasi dengan jemaat
            $table->string('keterangan'); // Kolom tipe
            $table->string('jumlah',12);
            $table->enum('status', ['masuk', 'keluar']); // Kolom tipe
             // Kolom jumlah dengan tipe decimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
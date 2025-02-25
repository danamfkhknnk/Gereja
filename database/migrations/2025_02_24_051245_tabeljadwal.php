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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('nama'); // Kolom nama
            $table->text('deskripsi'); // Kolom deskripsi
            $table->enum('jenis', ['ibadah', 'acara']); // Kolom jenis
            $table->enum('status', ['selesai', 'pending'])->default('pending'); // Kolom jenis
            $table->datetime('waktu'); // Kolom waktu
            $table->foreignId('warta_id')->constrained();; // Kolom relasi warta_id
            $table->unsignedBigInteger('pembawa_firman'); // Kolom relasi pembawa firman
            $table->unsignedBigInteger('keyboard'); // Kolom relasi keyboard
            $table->unsignedBigInteger('lcd'); // Kolom relasi lcd
            $table->string('foto')->nullable(); // Kolom foto

            // Definisikan foreign key
            $table->foreign('pembawa_firman')->references('id')->on('jemaats');
            $table->foreign('keyboard')->references('id')->on('jemaats');
            $table->foreign('lcd')->references('id')->on('jemaats');

            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
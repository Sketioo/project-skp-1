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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->integer('bawahan_id')->nullable();
            $table->string('nama');
            $table->string('pangkat');
            $table->string('gol_ruang');
            $table->string('jabatan');
            $table->string('unit');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->unique();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
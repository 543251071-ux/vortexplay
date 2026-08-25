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
        Schema::create('tb_game', function (Blueprint $table) {
            $table->id('id_game'); // Ini satu-satunya auto increment & primary key
            $table->string('nama', 255);
            $table->text('deskripsi')->nullable();
            $table->integer('harga'); // Cukup gunakan ->integer()
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->unsignedBigInteger('id_promo')->nullable();
            $table->string('gambar', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};

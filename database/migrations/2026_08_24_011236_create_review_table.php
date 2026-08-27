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
        Schema::create('tb_review', function (Blueprint $table) {
            $table->id('id_review');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_game');
            $table->integer('rating');
            $table->text('komentar')->nullable();
            $table->timestamp('tanggal_review')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('tb_user')->onDelete('cascade');
            $table->foreign('id_game')->references('id_game')->on('tb_game')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_review');
    }
};
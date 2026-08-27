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
       Schema::create('tb_keranjang', function (Blueprint $table) {
            $table->id('id_keranjang'); 
            $table->integer('id_user');  
            $table->integer('id_game'); 
            $table->string('nama_game'); 
            $table->integer('jumlah')->nullable(); 
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};

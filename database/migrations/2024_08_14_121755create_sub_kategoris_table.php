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
        Schema::create('sub_kategoris', function (Blueprint $table) {
            $table->id('id_sub_kategori');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id_kategoris')->on('kategoris')->onDelete('cascade');
            $table->string('nama_sub_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_kategoris');
    }
};

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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->unsignedBigInteger("id_transaksis")->autoIncrement();
            $table->string('token_transaksi')->unique();
            $table->unsignedBigInteger("produks_id");
            $table->foreign('produks_id')->references('id_produks')->on('produks');

            $table->string('snap_token')->nullable();
            $table->decimal('harga', 15, 2);

            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};

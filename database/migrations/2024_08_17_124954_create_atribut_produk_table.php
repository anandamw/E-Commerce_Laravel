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
        Schema::create('atribut_produk', function (Blueprint $table) {
            $table->id('id_atribut_produk');
            $table->string("nama_varian");
            $table->string("ukuran");
            $table->decimal("harga", 15, 2);
            $table->unsignedInteger("stok")->default(0);
            $table->string("foto_produk")->nullable();

            $table->unsignedBigInteger("produks_id");
            $table->foreign("produks_id")->references("id_produks")->on('produks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atribut_produk');
    }
};

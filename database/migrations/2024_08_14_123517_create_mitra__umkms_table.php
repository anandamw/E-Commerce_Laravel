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
        Schema::create('mitra_umkms', function (Blueprint $table) {
            $table->unsignedBigInteger("id_mitra_umkms")->autoIncrement();
            $table->string("token_umkm")->uniqid();
            $table->string("nama_umkm");
            $table->string("alamat_umkm");
            $table->string("foto_ktp");
            $table->string("file_facecame");
            $table->string("logo_umkm");
            $table->enum("status", ["register", "failed", "pending", "success", "complete"]);

            $table->foreignId("users_id")->constrained();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra_umkms');
    }
};

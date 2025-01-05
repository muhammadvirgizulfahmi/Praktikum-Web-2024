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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->double('modal');
            $table->string('pemilik');
            $table->string('alamat');
            $table->string('website');
            $table->string('email');
            $table->integer('rating');
            $table->unsignedBigInteger('kabkota_id');
            $table->unsignedBigInteger('kategori_umkm_id');
            $table->unsignedBigInteger('pembina_id');
            $table->foreign('kabkota_id')->references('id')->on('kabkotas');
            $table->foreign('kategori_umkm_id')->references('id')->on('kategori_umkms');
            $table->foreign('pembina_id')->references('id')->on('pembinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};

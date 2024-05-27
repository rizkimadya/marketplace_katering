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
            $table->id();
            $table->string('no_invoice');
            $table->unsignedBigInteger('kantor_id');
            $table->unsignedBigInteger('catering_id');
            $table->unsignedBigInteger('makanan_id');
            $table->string('jumlah_porsi');
            $table->string('tanggal_pengiriman');
            $table->timestamps();

            $table->foreign('kantor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('catering_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('makanan_id')->references('id')->on('makanans')->onDelete('cascade');
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

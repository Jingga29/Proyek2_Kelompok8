<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('nota_penjualan', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('pembeli');
            $table->text('lokasi_penjualan');
            $table->string('jenis');
            $table->integer('jumlah');
            $table->integer('harga'); // Menggunakan decimal untuk harga dengan dua digit di belakang koma
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('nota_penjualan');
    }
};

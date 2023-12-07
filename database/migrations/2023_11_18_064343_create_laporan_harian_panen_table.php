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
        Schema::create('laporan_harian_panen', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('produk');
            $table->text('lokasi_panen');
            $table->string('pegawai_panen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('laporan_harian_panen');
    }
};

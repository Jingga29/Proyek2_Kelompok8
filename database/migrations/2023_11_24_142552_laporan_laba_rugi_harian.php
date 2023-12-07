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
        Schema::create('laporan_laba_rugi_harian', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->integer('nota');
            $table->string('nominal');
            $table->integer('total_pendapatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('laporan_laba_rugi_harian');
    }
};

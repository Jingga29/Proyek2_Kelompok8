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
        Schema::create('laba_bulanan', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->string('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('laba_bulanan');
    }
};

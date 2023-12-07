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
        Schema::create('BOP', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('item_bop');
            $table->integer('nominal');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('BOP');
    }
};

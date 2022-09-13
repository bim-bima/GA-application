<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('pengguna');
            $table->string('PIC')->nullable();
            $table->string('lokasi_tujuan');
            $table->string('tujuan pemakaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitoring_kendaraan');
    }
};

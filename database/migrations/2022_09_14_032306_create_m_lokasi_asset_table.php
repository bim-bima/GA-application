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
        Schema::create('m_lokasi_asset', function (Blueprint $table) {
            $table->increments('mla_id');
            $table->string('mla_lokasi_asset');
            $table->timestamp('are_created_at',0)->useCurrent();
            $table->timestamp('are_updated_at',0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_lokasi_asset');
    }
};

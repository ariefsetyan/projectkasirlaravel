<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id_kendaraan');
            $table->string('nopol');
            $table->string('nama_kendaran');
            $table->string('tipe_kendaran');
            $table->string('jenis_kendaran');
            $table->unsignedInteger('id_customer');
            $table->foreign('id_customer')->references('id_customer')->on('customer');
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
        Schema::dropIfExists('kendaraan');
    }
}

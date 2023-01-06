<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id_item');
            $table->string('kode_item');
            $table->string('nama_item');
            $table->unsignedInteger('id_supplier');
            $table->foreign('id_supplier')->references('id_supplier')->on('supplier');
            $table->unsignedInteger('id_cat_item');
            $table->foreign('id_cat_item')->references('id_cat_item')->on('cat_item');
            $table->boolean('status');
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
        Schema::dropIfExists('item');
    }
}

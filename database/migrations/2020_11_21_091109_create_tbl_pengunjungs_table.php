<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPengunjungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengunjungs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kamera');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('jumlah');
            $table->integer('lantai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pengunjungs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKamerasTable extends Migration
{
    protected $primaryKey = 'no_kamera';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kameras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kamera');
            $table->string('channel_kamera');
            $table->dateTime('tanggal_buat');
            $table->dateTime('tanggal_update');
            $table->bigInteger('id_user')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kameras');
    }
}

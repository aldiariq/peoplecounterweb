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
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->bigInteger('id_user')->unsigned();
            // $table->integer('status_reverse');
            $table->integer('lantai');
            $table->integer('jumlah_maksimum');
            $table->integer('presentasi');
            $table->integer('x1');
            $table->integer('y1');
            $table->integer('x2');
            $table->integer('y2');
            $table->integer('x3');
            $table->integer('y3');
            $table->integer('x4');
            $table->integer('y4');
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

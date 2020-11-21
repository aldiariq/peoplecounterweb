<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPengaturangarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengaturangaris', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kamera');
            $table->integer('x1g1');
            $table->integer('y1g1');
            $table->integer('x2g1');
            $table->integer('y2g1');
            $table->integer('x1g2');
            $table->integer('y1g2');
            $table->integer('x2g2');
            $table->integer('y2g2');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
        Schema::dropIfExists('tbl_pengaturangaris');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user')->unsigned();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('max_lantai1');
            $table->integer('max_lantai2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_settings');
    }
}

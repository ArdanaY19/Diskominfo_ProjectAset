<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_baru');
            $table->string('kode_lama');
            $table->string('uraian');
            $table->string('Level1');
            $table->string('Level2');
            $table->string('Level3');
            $table->string('Level4');
            $table->string('Level5');
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
        Schema::dropIfExists('kodes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontruksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontruksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('Tingkat');
            $table->string('Beton');
            $table->string('Luas');
            $table->string('Alamat');
            $table->date('DokTgl');
            $table->string('DokNo');
            $table->string('ThMulai');
            $table->string('StatusTanah');
            $table->string('KodeTanah');
            $table->string('AsalUsul');
            $table->integer('NilaiKontrak');
            $table->string('KodeSubAkun')->nullable();
            $table->string('KodeTmbh')->nullable();
            $table->string('KodeKurang')->nullable();
            $table->string('SpNo');
            $table->date('SpTgl');
            $table->string('KwNo');
            $table->date('KwTgl');
            $table->string('BaNo');
            $table->date('BaTgl');
            $table->string('SkpdPemberi');
            $table->string('FotoBrg');
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
        Schema::dropIfExists('kontruksis');
    }
}

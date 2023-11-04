<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('KodeBarang');
            $table->string('NamaBarang');
            $table->integer('NoReg')->nullable();
            $table->string('Merk');
            $table->string('Ukuran');
            $table->string('Bahan');
            $table->date('TahunPembuatan');
            $table->string('NomorPabrik')->nullable();
            $table->string('NomorRangka')->nullable();
            $table->string('NomorMesin')->nullable();
            $table->string('NomorPolisi')->nullable();
            $table->string('NomorBPKB')->nullable();
            $table->string('CaraPerolehan')->nullable();
            $table->integer('JmlBrg')->nullable();
            $table->integer('HargaSatuan')->nullable();
            $table->integer('HargaPerolehan')->nullable();
            $table->string('KodeSubAkun')->nullable();
            $table->string('SubSub')->nullable();
            $table->string('KodeTmbh')->nullable();
            $table->string('KodeKurang')->nullable();
            $table->integer('SpNo')->nullable();
            $table->date('SpTgl')->nullable();
            $table->integer('KwNo')->nullable();
            $table->date('KwTgl')->nullable();
            $table->integer('BaNo')->nullable();
            $table->date('BaTgl')->nullable();
            $table->string('SkpdPemberi')->nullable();
            $table->string('KodeSubSubAkun')->nullable();
            $table->string('Kapitalisasi')->nullable();
            $table->string('KodeLama')->nullable();
            $table->string('KodeBaru')->nullable();
            $table->string('CekKecocokanKode')->nullable();
            $table->string('Level1')->nullable();
            $table->string('Level2')->nullable();
            $table->string('Level3')->nullable();
            $table->string('Level4')->nullable();
            $table->string('Level5')->nullable();
            $table->string('FotoBrg');
            $table->string('FotoBrg2');
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
        Schema::dropIfExists('mesins');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedungBgnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedung_bgns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('NoKodeBrg');
            $table->string('NoReg');
            $table->string('KondisiBgn');
            $table->string('KBTingkat');
            $table->string('KBPondasi');
            $table->string('LuasLt');
            $table->string('Alamat');
            $table->string('DokTgl');
            $table->string('DokNo');
            $table->string('Luas');
            $table->string('StatusTanah');
            $table->string('KodeTanah');
            $table->string('AsalUsul');
            $table->integer('JumlahGd');
            $table->integer('HargaPerolehan');
            $table->string('KodeSubAkun')->nullable();
            $table->string('SubSub')->nullable();
            $table->string('KodeTmbh')->nullable();
            $table->string('KodeKurang')->nullable();
            $table->string('SpNo');
            $table->date('SpTgl');
            $table->string('KwNo');
            $table->date('KwTgl');
            $table->string('BaNo');
            $table->date('BaTgl');
            $table->string('SkpdPemberi');
            $table->string('KodeSubSubAkun')->nullable();
            $table->string('KodeLama');
            $table->string('KodeBaru');
            $table->string('Level1');
            $table->string('Level2');
            $table->string('Level3');
            $table->string('Level4');
            $table->string('Level5');
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
        Schema::dropIfExists('gedung_bgns');
    }
}

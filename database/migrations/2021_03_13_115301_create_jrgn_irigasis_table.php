<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJrgnIrigasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jrgn_irigasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('NoKodeBrg');
            $table->string('NoReg');
            $table->string('Kontruksi');
            $table->string('Panjang');
            $table->string('Lebar');
            $table->string('Luas');
            $table->date('DokTgl');
            $table->string('DokNo');
            $table->string('KodeTanah');
            $table->string('AsalUsul');
            $table->integer('Jumlah');
            $table->integer('HargaPerolehan');
            $table->string('Kondisi');
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
            $table->string('CekKecocokan');
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
        Schema::dropIfExists('jrgn_irigasis');
    }
}

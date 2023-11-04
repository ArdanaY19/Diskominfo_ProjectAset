<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetTtpLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_ttp_lains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('NoKodeBrg');
            $table->string('NoReg');
            $table->string('JudulBuku');
            $table->string('Spesifikasi');
            $table->string('SeniAsalDaerah');
            $table->string('SeniPencipta');
            $table->string('SeniBahan');
            $table->string('JenisHT');
            $table->string('UkuranHT');
            $table->integer('Jumlah');
            $table->string('TahunCetak');
            $table->integer('HargaSatuan');
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
            $table->string('Kapitalis')->nullable();
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
        Schema::dropIfExists('aset_ttp_lains');
    }
}

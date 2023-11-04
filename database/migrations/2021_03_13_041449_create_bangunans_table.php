<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangunans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('NoReg');
            $table->string('Merk/Type');
            $table->string('Ukuran/cc');
            $table->string('Bahan');
            $table->string('TahunPembuatan');
            $table->string('NomorPabrik');
            $table->string('NomorRangka');
            $table->string('NomorMesin');
            $table->string('NomorPolisi');
            $table->string('NomorBPKB');
            $table->string('CaraPerolehan');
            $table->integer('JmlBrg');
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
            $table->string('Kapitalisasi')->nullable();
            $table->string('KodeLama');
            $table->string('KodeBaru');
            $table->string('CekKecocokanKode');
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
        Schema::dropIfExists('bangunans');
    }
}

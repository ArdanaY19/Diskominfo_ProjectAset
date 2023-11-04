<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_lains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('NoReg');
            $table->string('Merk');
            $table->string('Ukuran');
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
            $table->string('KodeTmbh')->nullable();
            $table->string('KodeKurang')->nullable();
            $table->string('SpNo');
            $table->date('SpTgl');
            $table->string('KwNo');
            $table->date('KwTgl');
            $table->string('BaNo');
            $table->date('BaTgl');
            $table->string('SkpdPemberi');
            $table->string('KodeLama');
            $table->string('Uraian');
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
        Schema::dropIfExists('aset_lains');
    }
}

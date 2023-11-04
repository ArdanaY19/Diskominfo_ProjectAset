<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaBarang');
            $table->string('NoKodeBrg');
            $table->string('NoReg');
            $table->string('Luas');
            $table->string('Tahun');
            $table->string('Alamat');
            $table->string('StatusHak');
            $table->date('SertifTgl');
            $table->string('SertifNo');
            $table->string('Penggunaan');
            $table->string('AsalUsul');
            $table->integer('Jumlah');
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
        Schema::dropIfExists('tanahs');
    }
}

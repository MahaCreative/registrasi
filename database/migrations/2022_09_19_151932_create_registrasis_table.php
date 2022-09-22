<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('fakultas_id')->constrained('fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('prodi_id')->constrained('prodis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kd_registrasi');
            $table->integer('semester');
            $table->integer('jml_sks');
            $table->float('ipk');
            $table->date('tgl_regis');
            $table->foreignId('berkas_id');
            $table->foreignId('profil_operator_id')->constrained('profil_operators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('registrasis');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nip')->nullable();
            $table->string('nim')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('ttl')->nullable();
            $table->string("telp")->nullable();
            $table->string('avatar')->nullable();
            $table->foreignId('fakultas_id')->nullable();
            $table->foreignId('prodi_id')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatihansiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihansiswa', function (Blueprint $table) {
            $table->integer('noSiswa')->unique();
            $table->string('nama');
            $table->string('jk');
            $table->string('jurusan');
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
        Schema::dropIfExists('latihansiswa');
    }
}

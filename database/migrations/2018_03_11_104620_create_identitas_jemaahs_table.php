<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitasJemaahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_jemaahs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('Jemaah');
         $table->string('asal_jemaah');
        $table->unsignedInteger('id_kloter');
        $table->foreign('id_kloter')->references('id')->on('kloters')->onDelete('CASCADE');
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
        Schema::dropIfExists('identitas_jemaahs');
    }
}

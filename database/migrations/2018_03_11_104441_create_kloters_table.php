<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kloters', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('No_kloter');
        $table->unsignedInteger('id_pembimbing');
        $table->foreign('id_pembimbing')->references('id')->on('pembimbings')->onDelete('CASCADE');
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
        Schema::dropIfExists('kloters');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->integer('user_id')->unsigned();
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('garantia');
            $table->longText('especificaciones')->nullable();
            //$table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
       /* Schema::table('equipos', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comercio_id')->unsigned()->index();
            $table->foreign('comercio_id')->references('id')->on('comercios')->onDelete('cascade');
            // Datos del Representante
            $table->string('nombreRepresentante');
            $table->string('ccRep');
            $table->string('nivelEstudioRep');
            $table->string('dirNotificacionRep');
            $table->string('telRepresentante')->nullable();
            $table->string('celRepresentante')->nullable();
            $table->string('waRepresentante')->nullable();
            $table->string('nombrePropietario')->nullable();
            $table->string('ccPropietario')->nullable();
            $table->string('dirPropietario')->nullable();
            $table->string('telPropietario')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('representantes');
    }
}

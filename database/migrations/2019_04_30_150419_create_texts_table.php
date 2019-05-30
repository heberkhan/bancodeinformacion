<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id');
            // IDENTIDAD DEL SITIO
            $table->string('slogan')->nullable();
            // PÁGINA PRINCIPAL
            $table->string('titulo')->nullable();
            $table->string('txtPrincipal')->nullable();
            //Redes sociales
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('webAlcaldia')->nullable();
            // Contacto

            $table->string('direccion')->nullable();
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
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
        Schema::dropIfExists('texts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionMercadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_mercados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comercio_id')->unsigned()->index();
            $table->foreign('comercio_id')->references('id')->on('comercios')->onDelete('cascade');
            // Gestión de Mercados
            $table->string('economiaDigital');
            $table->string('internetAyuda');
            $table->string('equipoVentas');
            $table->string('manejaSoftware');
            $table->string('radio')->nullable();
            $table->string('volantes')->nullable();
            $table->string('web')->nullable();
            $table->string('mFacebook')->nullable();
            $table->string('mTwitter')->nullable();
            $table->string('mInstagram')->nullable();
            $table->string('mYoutube')->nullable();
            $table->string('mWhatsapp')->nullable();
            $table->string('ferias')->nullable();
            $table->string('noHace')->nullable();
            $table->string('ampliarNegocio');
            $table->string('emailD')->nullable();
            $table->string('twitterD')->nullable();
            $table->string('facebookD')->nullable();
            $table->string('instagramD')->nullable();
            $table->string('whatsappD')->nullable();
            $table->string('youtubeD')->nullable();
            $table->string('otroD')->nullable();
            $table->string('usaInternet')->nullable();
            $table->string('usaEmail')->nullable();
            $table->string('usaDrive')->nullable();
            $table->string('usaFacebook')->nullable();
            $table->string('usaTwitter')->nullable();
            $table->string('usaInstagram')->nullable();
            $table->string('usaYoutube')->nullable();
            $table->string('usaWhatsapp')->nullable();
            $table->string('usaEditores')->nullable();
            $table->string('usaWord')->nullable();
            $table->string('interesaPublicidadRedes');
            $table->string('inversionPublicidad');
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
        Schema::dropIfExists('gestion_mercados');
    }
}

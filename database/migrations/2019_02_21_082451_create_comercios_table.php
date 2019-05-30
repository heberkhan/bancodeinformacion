<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComerciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercios', function (Blueprint $table) {
            $table->increments('id');
            //Datos básicos del local
            $table->string('tipoPersona');
            $table->string('nombre');
            $table->string('nit');
            $table->string('email');
            $table->string('dirEstablecimiento');
            $table->string('barrio');
            $table->string('dirNotificaciones');
            $table->string('actComercial');
            $table->string('categoria');
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->date('inicioActividades');
            $table->string('consumoEnergia');
            $table->string('viaPrincipal');
            $table->string('duenoTrabaja');
            $table->string('lunes')->nullable();
            $table->string('martes')->nullable();
            $table->string('miercoles')->nullable();
            $table->string('jueves')->nullable();
            $table->string('viernes')->nullable();
            $table->string('sabado')->nullable();
            $table->string('domingo')->nullable();
            $table->string('horario');
            $table->string('cantTrabajadores');
            $table->string('tipoLocal');
            $table->string('areaLocal');
            $table->string('avisos');
            $table->string('ventasPromedio');
            // Descripción del local
            $table->string('descripcion');
            $table->string('logo');
            $table->string('qr')->nullable();
            // Estado del Contribuyente 
            $table->string('rut');
            $table->string('camaraComercio');
            $table->string('rtiyc');
            $table->string('usoSuelos');
            $table->string('diiyc');
            $table->string('saycoAcinpro');
            $table->string('sanidad');
            $table->string('manejoAlimentos');
            $table->string('bomberos');
            $table->string('libroDiario');
            $table->string('ciyc');
            // Gestión de Mercados
            $table->string('economiaDigital');
            $table->string('internetAyuda');
            $table->string('equipoVentas');
            $table->string('manejaSoftware');
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
            // Redes
            
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('url')->nullable();
            $table->string('lat')->required();
            $table->string('long')->required();
            // Datos del Representante
            $table->string('nombreRepresentante');
            $table->string('cc');
            $table->string('nivelEstudio');
            $table->string('dirNotificacionRep');
            $table->string('telRepresentante');
            $table->string('celRepresentante');
            $table->string('waRepresentante');
            //Etiquetas
            $table->string('etiquetas');
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
        Schema::dropIfExists('comercios');
    }
}

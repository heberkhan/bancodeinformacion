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
            $table->string('nombre')->nullable();
            $table->string('nit')->nullable();
            $table->string('email')->nullable();
            $table->string('dirEstablecimiento')->nullable();
            $table->integer('barrio_id')->unsigned()->index();
            $table->foreign('barrio_id')->references('id')->on('barrios')->onDelete('cascade');
            $table->string('dirNotificaciones')->nullable();
            $table->string('actComercial');
            $table->string('categoria');
            $table->string('impuesto_id1')->nullable();
            $table->string('impuesto_id2')->nullable();
            $table->string('impuesto_id3')->nullable();
            $table->string('impuesto_id4')->nullable();
            $table->string('impuesto_id5')->nullable();
            $table->string('impuesto_id6')->nullable();
            $table->string('impuesto_id7')->nullable();
            $table->string('impuesto_id8')->nullable();
            $table->string('requisito_id1')->nullable();
            $table->string('requisito_id2')->nullable();
            $table->string('requisito_id3')->nullable();
            $table->string('requisito_id4')->nullable();
            $table->string('requisito_id5')->nullable();
            $table->string('requisito_id6')->nullable();
            $table->string('requisito_id7')->nullable();
            $table->string('requisito_id8')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Descripción del local
            $table->string('descripcion');
            $table->string('logo');
            $table->string('qr')->nullable();
            $table->string('etiquetas');
            $table->string('pqr')->nullable();
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

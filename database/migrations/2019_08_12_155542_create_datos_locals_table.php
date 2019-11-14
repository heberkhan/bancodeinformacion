<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_locals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comercio_id')->unsigned()->index();
            $table->foreign('comercio_id')->references('id')->on('comercios')->onDelete('cascade');
            // DATOS DEL LOCAL
            $table->date('inicioActividades')->nullable();
            $table->string('consumoEnergia')->nullable();
            $table->string('viaPrincipal')->nullable();
            $table->string('duenoTrabaja')->nullable();
            $table->string('diasLaborales')->nullable();
            $table->string('horario')->nullable();
            $table->string('cantTrabajadores')->nullable();
            $table->string('tipoLocal')->nullable();
            $table->string('areaLocal')->nullable();
            $table->string('avisos')->nullable();
            $table->string('ventasPromedio')->nullable();
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
        Schema::dropIfExists('datos_locals');
    }
}

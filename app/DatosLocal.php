<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosLocal extends Model
{
  protected $fillable = ['comercio_id', 'inicioActividades', 'consumoEnergia', 'viaPrincipal', 'duenoTrabaja', 'diasLaborales',
                        'horario', 'cantTrabajadores', 'tipoLocal', 'areaLocal', 'avisos', 'user_id', 'ventasPromedio'];
}

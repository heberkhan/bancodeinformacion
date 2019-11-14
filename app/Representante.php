<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
  protected $fillable = ['comercio_id', 'nombreRepresentante', 'ccRep', 'nivelEstudioRep', 'dirNotificacionRep', 'telRepresentante',
                        'celRepresentante', 'waRepresentante', 'nombrePropietario', 'ccPropietario', 'dirPropietario', 'user_id', 'telPropietario'];
}

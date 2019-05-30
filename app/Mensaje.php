<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'nombrePQR', 'emailPQR', 'mensajePQR', 'asuntoPQR', 'leidoPQR',];
}

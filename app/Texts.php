<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texts extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'slogan', 'titulo', 'txtPrincipal', 'facebook', 'twitter', 'instagram', 'youtube', 'email1', 'email2', 'webAlcaldia', 'direccion', 'telefono1', 'telefono2',];
}

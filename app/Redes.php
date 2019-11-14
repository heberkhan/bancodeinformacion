<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redes extends Model
{
  protected $fillable = ['comercio_id', 'facebook', 'twitter', 'instagram', 'url', 'lat',
                        'long', 'email', 'user_id'];
}

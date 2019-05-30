<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'logo2', 'slider1', 'slider2', 'slider3',];
}

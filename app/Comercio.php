<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'nombre', 'direccion', 'actComercial', 'facebook', 'twitter', 'instagram', 'url', 'lat', 'long', 'etiquetas'];


    public function scopeSearch($query, $etiquetas)
    {
    	if ($etiquetas) {
    		return $query->where('etiquetas', 'LIKE', "%$etiquetas%");
    	}
    	
    }
}

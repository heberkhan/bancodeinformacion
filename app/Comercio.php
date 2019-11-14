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
    protected $fillable = ['tipoPersona', 'nombre', 'nit', 'email', 'dirEstablecimiento', 'barrio_id',
                          'dirNotificaciones', 'actComercial', 'categoria', 'telefono', 'celular', 'user_id', 'descripcion', 'logo', 'qr', 'etiquetas', 'pqr', 'impuesto_id1', 'impuesto_id2', 'impuesto_id3',
                        'impuesto_id4', 'impuesto_id5', 'impuesto_id6', 'impuesto_id7', 'impuesto_id8', 'requisito_id1', 'requisito_id2', 'requisito_id3',
                      'requisito_id4', 'requisito_id5', 'requisito_id6', 'requisito_id7', 'requisito_id8'];


    public function scopeSearch($query, $etiquetas)
    {
    	if ($etiquetas) {
    		return $query->where('etiquetas', 'LIKE', "%$etiquetas%")->orWhere('nombre', 'LIKE', "%$etiquetas%")->orWhere('actComercial', 'LIKE', "%$etiquetas%")->orWhere('nit', 'LIKE', "%$etiquetas%");
    	}
      


    }
}

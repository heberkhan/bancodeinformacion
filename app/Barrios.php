<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrios extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'zona', 'upz'];


    public function scopeSearch($query, $name)
    {
    	if ($name) {
    		return $query->where('name', 'LIKE', "%$name%");
    	}
    	
    }
}

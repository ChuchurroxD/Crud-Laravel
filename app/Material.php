<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function familia() {
    	return $this->belongsTo('App\Familia');
    }

    public function marca() {
    	return $this->belongsTo('App\Marca');
    }

	public function unidad() {
    	return $this->belongsTo('App\Marca', 'unidad_entrega_id');
    }    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = "Ambiente";
	protected $primaryKey = 'id';
	protected $fillable = array("Nombres","descripcion","cod_am","sillasc","mesasc","enchufesc","personasc");

  public function mueble()
  {

    return $this->hasMany('App\Mueble', 'id_ma', 'id');

  }
}


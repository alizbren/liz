<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
     protected $table="Medico";
     protected $primaryKey="cd_m";
     public    $incrementing = false;
     protected $fillable = array('nombre','descripcion','id_am','tipo');
}

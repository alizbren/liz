<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
     protected $table="Paciente";
     protected $primarykey="cd_p";
     public    $incrementing = false;
     protected $fillable = array('nombre','apaterno','amaterno','ci','fecha_nacimiento','edad','Estado_civil','telefono');
}

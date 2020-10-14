<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
	public $table='calculos';
    protected $fillable=['nombredelevaluador','fincaEva','loteEva', 'fechadeevaluacion', 'porcentajedeinfestacion','porcentajedemortalidad', 'porcentajedeausencia'];
}


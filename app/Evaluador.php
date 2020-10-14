<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluador extends Model
{
	 protected $guarded=['id'];
    public $table='evaluadores';
 protected $fillable=['cedula', 'nombres', 'apellidos', 'fechadenacimiento', 'direccion', 'municipio','correo','tipo_evaluador_id' ];
}

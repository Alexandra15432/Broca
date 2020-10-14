<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
       public $table='evaluaciones';
    protected $fillable=['totalgranos','brocasvivasA','borcasvivasB', 'borcasvivasC', 'brocasmuertasA', 'brocasmuertasB', 'brocasmuertasC', 'brocasausentes', 'nombre','lote','finca', 'fechadeevaluacion'];
}

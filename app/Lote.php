<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    
    protected $fillable=['lote_numero','finca_id','extension'];
}

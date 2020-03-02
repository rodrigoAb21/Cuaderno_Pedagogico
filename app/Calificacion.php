<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificacion';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'puntos',
        'estudiante_id',
        'actividad_id',
    ];
}

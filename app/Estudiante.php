<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'rude',
        'fnac',
        'ci',
        'edad',
        'tutor',
        'direccion',
        'telefono',
    ];
}

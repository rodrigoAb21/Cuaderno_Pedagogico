<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencia';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'estado',
        'estudiante_id',
        'dia_id',
    ];
}

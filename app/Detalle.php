<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'detalle';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'estado',
        'estudiante_id',
        'asistencia_id',
    ];

    public function estudiante(){
        return $this->belongsTo('App\Estudiante', 'estudiante_id', 'id');
    }



}

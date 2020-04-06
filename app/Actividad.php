<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'fecha',
        'dimension_id',
        'materia_id',
    ];

    public function materia()
    {
        return $this->belongsTo('App\Materia', 'materia_id', 'id');
    }

    public function dimension()
    {
        return $this->belongsTo('App\Dimension', 'dimension_id', 'id');
    }

    public function calificaciones(){
        return $this->hasMany(Calificacion::class);
    }


}

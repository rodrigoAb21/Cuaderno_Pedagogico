<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencia';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'abreviatura',
        'fecha',
    ];

    public function detalles(){
        return $this->hasMany(Detalle::class);
    }
}

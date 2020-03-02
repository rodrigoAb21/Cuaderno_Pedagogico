<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    protected $table = 'trimestre';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'inicio',
        'fin',
    ];
}

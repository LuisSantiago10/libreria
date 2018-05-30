<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
	protected $table = 'mamada';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nac'
    ];




}

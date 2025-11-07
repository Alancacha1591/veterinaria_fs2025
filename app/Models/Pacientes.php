<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    protected $primaryKey = 'num_expediente';
    public $timestamps = false;

    protected $fillable = [
        'num_expediente',
        'nombre',
        'raza',
        'diagnostico',
        'edad',
        'sexo'
    ];
}

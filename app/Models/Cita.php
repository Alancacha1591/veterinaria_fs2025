<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        "id",
        'fecha',
        'nombre_paciente',
        'telefono_paciente',
        'motivo',
    ];
}

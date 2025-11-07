<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedientes extends Model
{
    use HasFactory;

    protected $table = 'expediente';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'numero_expediente',
        'nombre_paciente',
        'ultima_cita',
        'vacunas_puestas',
        'vencimiento_vacunas',
        'proxima_revision',
        'nombre_dueno',
        'telefono_dueno',
        'diagnostico_actual',
        'tratamiento_actual',
    ];
}
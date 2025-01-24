<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descripcion', 'fecha', 'hora_inicio', 'hora_fin', 'paciente_id'
    ];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}

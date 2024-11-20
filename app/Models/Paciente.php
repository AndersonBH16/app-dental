<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni', 'nombres', 'apellido_paterno', 'apellido_materno',
        'genero', 'telefono', 'email', 'fecha_nacimiento', 'direccion', 'estado'];
}

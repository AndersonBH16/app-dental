<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'dni', 'nombres', 'apellido_paterno', 'apellido_materno',
        'genero', 'telefono', 'email', 'fecha_nacimiento', 'direccion', 'estado'];

    public function fullname()
    {
        return $this->nombres . " " . $this->apellido_paterno . " " . $this->apellido_materno;
    }

    public function odontograms()
    {
        return $this->hasMany(Odontograma::class, 'paciente_id', 'id');
    }
}

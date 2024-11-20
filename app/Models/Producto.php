<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo', 'nombre', 'descripcion', 'stock', 'precio', 'marca', 'modelo', 'serie',
        'imagen', 'categoria_id', 'estado'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];

    public function ediciones()
    {
        return $this->belongsToMany(Edicion::class, 'categorias_ediciones')
                    ->withPivot('num_convocatoria');
    }
}

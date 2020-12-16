<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    protected $guard = 'productos';

    protected $fillable = [
        'nombre',
        'cantidad',
        'estado',
        'fotoPrincipal',
        'precio',
        'descripcion',
        'descuento',
        'marca',
        'categoria_id',
    ];

    public function fotocaroucel () {
        return $this->BelongsTo (FotoCarousel::class, 'fotoCarousel_id');
    }
    public function categoria () {
        return $this->BelongsTo (Categoria::class, 'categoria_id');
    }
}

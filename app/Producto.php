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
    ];

    public function fotocaroucel () {
        return $this->BelongsTo ('App\FotoCarousel', 'fotoCarousel_id');
    }
}

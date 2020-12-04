<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table = 'detallecompras';

    protected $fillable = [
        'titulo', 
        'descripcion',
    ];
}

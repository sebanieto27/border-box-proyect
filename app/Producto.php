<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guard = 'productos';


    protected $fillable = [
        'nombre',
        'fotoPrincipal',
        'descripcion',
        'precio',
    ];
}

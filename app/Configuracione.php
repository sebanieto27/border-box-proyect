<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracione extends Model
{
    protected $fillable = [
        'telefono', 
        'oficina1',
        'oficina2', 
        'email',  
        'calle', 
        'numero', 
        'cp', 
        'ciudad', 
        'provincia', 
        'twitter', 
        'facebook', 
        'instagram', 
        'youtube', 
    ];
}

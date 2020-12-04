<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoCarousel extends Model
{
    protected $guard = 'foto_carousel';

    protected $fillable = [
        'fotoCarousel',
    ];
}

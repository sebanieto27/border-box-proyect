<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoCarousel extends Model
{
    protected $table = 'foto_carousel';

    protected $fillable = [
        'fotoCarousel',
        'producto_id',
    ];

    public function producto () {
        return $this->BelongsTo (Producto::class, 'producto_id');
    }
}

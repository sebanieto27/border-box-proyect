<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Producto;
use App\DetalleCompra;
use Illuminate\Http\Request;
use App\Mail\MensajeContacto;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('index', compact('productos'));
    }

    public function producto($id)
    {
        $producto = Producto::find($id);
        $detalleCompras = DetalleCompra::all();
        $productoRelacionados = Producto::inRandomOrder()->get();

        return view('producto', compact('producto', 'detalleCompras', 'productoRelacionados'));
    }

}

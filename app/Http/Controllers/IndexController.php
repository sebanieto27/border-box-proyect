<?php

namespace App\Http\Controllers;

use App\DetalleCompra;
use App\Producto;
use Illuminate\Http\Request;

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

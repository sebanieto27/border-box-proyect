<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('index', compact('productos'));
    }
}

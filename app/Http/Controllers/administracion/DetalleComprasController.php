<?php

namespace App\Http\Controllers\Administracion;

use App\DetalleCompra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleCompras = DetalleCompra::all();

        return view('administracion.configuraciones.detallesCompra.list', compact('detalleCompras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleCompra = DetalleCompra::all();

        return view('administracion.configuraciones.detallesCompra.create', compact('detalleCompra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'titulo' => 'required|max:50',
            'descripcion' => 'required|max:255',
        ], ['titulo.required' => __('El título del detalle es obligatorio.'),
            'descripcion.required' => __('El descripción del detalle es obligatorio.'),
            ]
        );

        $data = request()->all();

        DetalleCompra::create($data);

        return redirect('detalleCompra')->with('Mensaje', 'Detalle de compras agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleCompra = DetalleCompra::find($id);

        return view('administracion.configuraciones.detallesCompra.edit', compact('detalleCompra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalleCompra = request()->all();
        DetalleCompra::where('id','=',$id)->first()->update($detalleCompra);

        return redirect('detalleCompra')->with('Mensaje', 'Detalle de compras editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetalleCompra::destroy($id);
        return redirect('detalleCompra')->with('Mensaje', 'Detalle de compras eliminada con éxito');
    }
}

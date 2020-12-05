<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
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
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('search'));
            $productos=Producto::where('nombre', 'LIKE', '%' .$query. '%')
                                  ->orderBy('id', 'asc')
                                  ->paginate(10);

            return view('administracion.productos.list', ['productos' => $productos, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('administracion.productos.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [   'nombre' => 'required',
                'precio' => 'required',
                'marca' => 'required',
                'fotoPrincipal' => 'required',
                'descripcion' => 'required',
            ], ['nombre.required' => __('El nombre del producto es obligatorio.'),
                'precio.required' => __('El precio del producto es obligatorio.'),
                'marca.required' => __('La marca del producto es obligatorio.'),
                'fotoPrincipal.required' => __('La foto del producto es obligatoria.'),
                'descripcion.required' => __('La descripcion del producto es obligatoria.'),
                ]
        );

        if ($request->hasFile('fotoPrincipal'))
        {
            $data['fotoPrincipal'] = $request->file('fotoPrincipal')->store('uploads', 'public');
        };

        // if ($request->hasFile('fotocaroucel_id'))
        // {
        //     foreach ($variable as $key => $value) {
        //         # code...
        //     }
        // }

        $data = request()->all();

        Producto::create($data);

        return redirect('administracion')->with('Mensaje', 'Producto agregado con éxito');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

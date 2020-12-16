<?php

namespace App\Http\Controllers\administracion;

use App\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriasController extends Controller
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
            $categorias = Categoria::where('nombre', 'LIKE', '%' .$query. '%')
                                  ->orderBy('id', 'asc')
                                  ->paginate(10);

            return view('administracion.categorias.list', ['categorias' => $categorias, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('administracion.categorias.create', compact('categorias'));
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
            ], ['nombre.required' => __('El nombre de la categoría es obligatorio.'),
                ]
        );

        Categoria::create($data);
   
        return redirect('categorias')->with('Mensaje', 'Categoría agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);

        return view('administracion.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('administracion.categorias.edit', compact('categoria'));
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
        $data = request()->validate(
            [   'nombre' => 'required',
            ], ['nombre.required' => __('El nombre de la categoría es obligatorio.'),
                ]
        );

        Categoria::first()->update($data);
   
        return redirect('categorias')->with('Mensaje', 'Categoría agregada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect('categorias')->with('Mensaje', 'Categoría eliminada con éxito');
    }
}

<?php

namespace App\Http\Controllers\Administracion;

use App\FotoCarousel;
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
                'fotoPrincipal' => 'required|image',
                'fotoCarousel.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
                'descripcion' => 'required',
            ], ['nombre.required' => __('El nombre del producto es obligatorio.'),
                'precio.required' => __('El precio del producto es obligatorio.'),
                'marca.required' => __('La marca del producto es obligatorio.'),
                'fotoPrincipal.required' => __('La foto del producto es obligatoria.'),
                // 'fotoPrincipal.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
                'descripcion.required' => __('La descripcion del producto es obligatoria.'),
                ]
        );

        if ($request->hasFile('fotoPrincipal'))
        {
            $data['fotoPrincipal'] = $request->file('fotoPrincipal')->store('uploads', 'public');
            
        };
        $producto = Producto::create($data);

            
        $urlImagenes = [];
        
        if ($request->hasFile('fotoCarousel'))
        {
            $imagenes = $request->file('fotoCarousel');
            
            foreach ($imagenes as $imagene) {

                $nombre = time().'_'.$imagene->getClientOriginalName();
                $ruta = public_path().'/img/productos';
                $imagene->move($ruta, $nombre);
                $urlImagenes[]['url'] = '/img/productos/'.$nombre;

                FotoCarousel::create([
                    'fotoCarousel' => $urlImagenes,
                ]);
            }
            
        };

    

        
        
        

       
        return redirect('productos')->with('Mensaje', 'Producto agregado con éxito');
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
        $producto = Producto::find($id);

        return view('administracion.productos.edit', compact('producto'));
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
        $producto = request()->all();
        Producto::where('id','=',$id)->first()->update($producto);

        return redirect('productos')->with('Mensaje', 'Producto editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('productos')->with('Mensaje', 'Producto eliminado con éxito');
    }
}

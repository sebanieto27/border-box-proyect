<?php

namespace App\Http\Controllers\Administracion;

use File;
use Response;
use App\Producto;
use App\FotoCarousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                'fotoPrincipal' => 'required|image|mimes:jpeg,png,jpg,svg',
                'fotoCarousel.*' => 'image|mimes:jpeg,png,jpg,svg',
                'descripcion' => 'required',
            ], ['nombre.required' => __('El nombre del producto es obligatorio.'),
                'precio.required' => __('El precio del producto es obligatorio.'),
                'marca.required' => __('La marca del producto es obligatorio.'),
                'fotoPrincipal.required' => __('La foto del producto es obligatoria y debe ser en estos formartos: jpeg, png, jpg o svg.'),
                'fotoPrincipal.*' => __('Las fotos del crarousel debe ser en estos formartos: jpeg, png, jpg o svg.'),
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
            
            foreach ($imagenes as $key => $imagene) {

                $nombre = time().'_'.$imagene->getClientOriginalName();
                $ruta = public_path('/img/productos');
                $imagene->move($ruta, $nombre);
                $urlImagenes[$key]['url'] = '/img/productos/'.$nombre;

                FotoCarousel::create([
                    'nombreFoto' => $nombre,
                    'fotoCarousel' => $urlImagenes[$key]['url'],
                    'producto_id' => $producto->id,
                ]);
            }
            
        };

       
        return redirect('productos')->with('Mensaje', 'Producto agregado con éxito');
    }

    public function fotoPrincipal($id = NULL)
    {
        $producto = Producto::find($id);

        $path = storage_path('/app/public/'.$producto->fotoPrincipal);

        if (!File::exists($path) || $producto->fotoPrincipal == NULL || empty($producto->fotoPrincipal)) {

            $path = public_path()."/img/marketplace/products/01.jpg";
            $file = File::get($path);
            $type = File::mimeType($path);

        }
        else
        {
            $file = File::get($path);
            $type = File::mimeType($path);
        }

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }

    public function displayFotoCarousel($id = NULL)
    {
        $fotoCarousel = FotoCarousel::find($id);

        $path = public_path($fotoCarousel->fotoCarousel);

        if (!File::exists($path) || $fotoCarousel->fotoCarousel == NULL || empty($fotoCarousel->fotoCarousel)) {

            $path = public_path()."/img/marketplace/products/01.jpg";
            $file = File::get($path);
            $type = File::mimeType($path);

        }
        else
        {
            $file = File::get($path);
            $type = File::mimeType($path);
        }

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $fotoCarousel = FotoCarousel::where('producto_id', '=', $id)->get();

        return view('administracion.productos.show', compact('producto', 'fotoCarousel'));
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
        $fotoCarousel = FotoCarousel::where('producto_id', '=', $id)->get();

        return view('administracion.productos.edit', compact('producto', 'fotoCarousel'));
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

        $data = request()->validate(
            [   'nombre' => 'required',
                'precio' => 'required',
                'marca' => 'required',
                'fotoPrincipal.*' => 'image|mimes:jpeg,png,jpg,svg',
                'fotoCarousel.*' => 'image|mimes:jpeg,png,jpg,svg',
                'descripcion' => 'required',
            ], ['nombre.required' => __('El nombre del producto es obligatorio.'),
                'precio.required' => __('El precio del producto es obligatorio.'),
                'marca.required' => __('La marca del producto es obligatorio.'),
                'fotoPrincipal.required' => __('La foto del producto es obligatoria.'),
                'fotoPrincipal.*' => 'image|mimes:jpeg,png,jpg,svg',
                'descripcion.required' => __('La descripcion del producto es obligatoria.'),
                ]
        );

        if ($request->hasFile('fotoPrincipal'))
        {
            $data['fotoPrincipal'] = $request->file('fotoPrincipal')->store('uploads', 'public');
            
        };

        $producto = Producto::where('id','=',$id)->first()->update($data);

            
        $urlImagenes = [];
        
        if ($request->hasFile('fotoCarousel'))
        {
            $imagenes = $request->file('fotoCarousel');
            
            foreach ($imagenes as $key => $imagene) {

                $nombre = time().'_'.$imagene->getClientOriginalName();
                $ruta = public_path('/img/productos');
                $imagene->move($ruta, $nombre);
                $urlImagenes[$key]['url'] = '/img/productos/'.$nombre;

                FotoCarousel::create([
                    'nombreFoto' => $nombre,
                    'fotoCarousel' => $urlImagenes[$key]['url'],
                    'producto_id' => $producto->id,
                ]);
            }
            
        };




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
        
        FotoCarousel::where('producto_id', '=', $id)->delete();
        Producto::destroy($id);
        return redirect('productos')->with('Mensaje', 'Producto eliminado con éxito');
    }
}

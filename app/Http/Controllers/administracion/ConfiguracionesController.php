<?php

namespace App\Http\Controllers\administracion;

use App\Configuracione;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfiguracionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('administracion.index');
    }

    public function contacto(){

        $configuraciones = Configuracione::find(1);


        if (Request()->isMethod('post'))
        {
            $data = request()->validate([

                'telefono' => 'required',
                'oficina1' => 'required',
                'oficina2' => 'required',
                'email' => 'required',
                'calle' => 'required',
                'numero' => 'required',
                'cp'  => 'required',
                'ciudad'  => 'required',
                'provincia'  => 'required',
                'twitter'  => 'required',
                'facebook'  => 'required',
                'instagram'  => 'required',
                'youtube'  => 'required',

            ], [
                'telefono.required' => 'El campo es obligatorio y debe ser un número.',
                'oficina1.required' => 'El campo es obligatorio y debe ser un número.',
                'email.required' => 'El campo es obligatorio y debe ser un número.',
                'calle.required' => 'El campo es obligatorio y debe ser un número.',
                'numero.required' => 'El campo es obligatorio y debe ser un número.',
                'cp.required' => 'El campo es obligatorio y debe ser un número.',
                'ciudad.required' => 'El campo es obligatorio y debe ser un número.',
                'provincia.required' => 'El campo es obligatorio y debe ser un número.',
                'twitter.required' => 'El campo es obligatorio y debe ser un número.',
                'facebook.required' => 'El campo es obligatorio y debe ser un número.',
                'instagram.required' => 'El campo es obligatorio y debe ser un número.',
                'youtube.required' => 'El campo es obligatorio y debe ser un número.',
                ]

            );

            $data = request()->all();
            $configuraciones = Configuracione::find($data['config_id']);
            $configuraciones->update($data);

        }

        return view('administracion.configuraciones.contacto', compact('configuraciones'));
    }
}

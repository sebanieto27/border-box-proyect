<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Mail\MensajeContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/contacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ], ['nombre.required' => __('El nombre del producto es obligatorio.'),
            'email.required' => __('El email del producto es obligatorio.'),
            'telefono.required' => __('El télefono del producto es obligatorio.'),
            'asunto.required' => __('El asunto del producto es obligatorio.'),
            'mensaje.required' => __('El mensaje del producto es obligatorio.'),
            ]
        );
    
        Mail::to('sebanieto27@gmail.com')->send(new MensajeContacto);
        Contacto::create($data);

        return redirect('/')->with('Mensaje', 'Mensaje enviado con éxito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}

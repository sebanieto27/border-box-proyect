@extends('administracion.head')

@section('content')
@trixassets
<div class="main-content" style="min-height: 351px;">
    <section class="section">
        <div class="row justify-content-center">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card col-md-8">
                <div class="card-header">
                    <h3>{{__('Configuración de contacto')}}</h3>
                    <div class="card-header-form">
                      
                    </div>
                  </div>
                <form method="POST" action="{{ url()->current() }}">
                    @csrf
                    <input type="hidden" name="config_id" value="{{ $configuraciones->id }}">           
                    <div class="form-row">
                        <div class="form-group col-12">
                            <h5>{{__('Teléfonos')}}</h5>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTaxId">{{__('Télefono principal')}}</label>
                            <input id="telefono" type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $configuraciones->telefono }}" autocomplete="telefono" autofocus >
                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTaxId">{{__('Oficina 1')}}</label>
                            <input id="oficina1" type="text" name="oficina1" class="form-control @error('oficina1') is-invalid @enderror" value="{{ $configuraciones->oficina1 }}" autocomplete="oficina1" autofocus >
                            @error('oficina1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTaxId">{{__('Oficina 2')}}</label>
                            <input id="oficina2" type="text" name="oficina2" class="form-control @error('oficina2') is-invalid @enderror" value="{{ $configuraciones->oficina2 }}" autocomplete="oficina2" autofocus >
                            @error('oficina2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <h5>{{__('Email')}}</h5>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputTaxId">{{__('Email')}}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $configuraciones->email }}" autocomplete="email" autofocus >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                        <h5>{{__('Dirección')}}</h5>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTaxId">{{__('Calle')}}</label>
                            <input id="calle" type="text" value="{{ $configuraciones->calle }}" class="form-control @error('calle') is-invalid @enderror" name="calle" autocomplete="calle" autofocus >
                            @error('calle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTaxId">{{__('Número')}}</label>
                            <input id="numero" type="text" value="{{ $configuraciones->numero }}" class="form-control @error('numero') is-invalid @enderror" name="numero" autocomplete="numero" autofocus >
                            @error('numero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTaxId">{{__('Código postal')}}</label>
                            <input id="cp" type="text" value="{{ $configuraciones->cp }}" class="form-control @error('cp') is-invalid @enderror" name="cp" autocomplete="cp" autofocus >
                            @error('cp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTaxId">{{__('Ciudad')}}</label>
                            <input id="ciudad" type="text" value="{{ $configuraciones->ciudad }}" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" autocomplete="ciudad" autofocus >
                            @error('ciudad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTaxId">{{__('Provincia')}}</label>
                            <input id="provincia" type="text" value="{{ $configuraciones->provincia }}" class="form-control @error('provincia') is-invalid @enderror" name="provincia" autocomplete="provincia" autofocus >
                            @error('escalas')
                                <span provincia="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <h5>{{__('Redes sociales')}}</h5>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputTaxId">{{__('Twitter')}}</label>
                            <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ $configuraciones->twitter }}" autocomplete="twitter" autofocus >
                            @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputTaxId">{{__('Facebook')}}</label>
                            <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ $configuraciones->facebook }}" autocomplete="facebook" autofocus >
                            @error('escalas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputTaxId">{{__('Instagram')}}</label>
                            <input id="instagram" type="text" value="{{ $configuraciones->instagram }}" class="form-control @error('instagram') is-invalid @enderror" name="instagram" autocomplete="instagram" autofocus >
                            @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputTaxId">{{__('Youtube')}}</label>
                            <input id="youtube" type="text" value="{{ $configuraciones->youtube }}" class="form-control @error('youtube') is-invalid @enderror" name="youtube" autocomplete="youtube" autofocus >
                            @error('escalas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit">{{__('Modificar configuración')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection

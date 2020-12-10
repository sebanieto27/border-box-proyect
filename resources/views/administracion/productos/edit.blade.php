@extends('administracion.head')
@section('content')
    
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="main-content" style="min-height: 530px;">
  <section class="section">
    <div class="row justify-content-center">
      <div class="card col-md-8">
        <form method="POST" action="{{ url ('productos/' . $producto->id)}}" enctype="multipart/form-data">
          @csrf  
          {{method_field('PATCH')}}           
          <div class="card-header">
            <h4>{{ __('Editar producto') }} {{$producto->nombre}}</h4>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">{{ __('Nombre') }}</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre" name="nombre" value=" {{$producto->nombre}} " autofocus="" required="">
                @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="">{{ __('Precio regular') }}</label>
                <input type="number" class="form-control @error('precio') is-invalid @enderror" placeholder="Precio" name="precio" value="{{$producto->precio}}" autofocus="" required="">
                @error('precio')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">{{ __('Marca') }}</label>
                <input type="text" class="form-control @error('marca') is-invalid @enderror" placeholder="Marca" name="marca" value="{{$producto->marca}}" autofocus="" required="">
                @error('marca')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="">Categoría</label>
                <input type="number" class="form-control @error('categoria') is-invalid @enderror" placeholder="Categoría" name="" value="" autofocus="" >
                @error('categoria')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">{{ __('Foto principal') }}</label>
                  <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ route('fotoPrincipal', [ 'id'=> $producto->id ]) }}" target="_blank">
                          <img class="img-responsive thumbnail" src="{{ route('fotoPrincipal', [ 'id'=> $producto->id ]) }}" alt="" style="height: 250px;">
                        </a>
                      </div>
                  </div>
                <input type="file" class="form-control @error('fotoPrincipal') is-invalid @enderror" name="fotoPrincipal" value="{{$producto->fotoPrincipal}}">
                @error('fotoPrincipal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="fotoCarousel">{{ __('Foto carousel') }}</label>
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                  @foreach ($fotoCarousel as $foto)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <a href="{{ route('displayFotoCarousel', [ 'id'=> $foto->id ]) }}" target="_blank">
                        <img class="img-responsive thumbnail" src="{{ route('displayFotoCarousel', [ 'id'=> $foto->id ]) }}" alt="" style="height: 250px;">
                      </a>
                    </div>
                  @endforeach
                </div>
                <input type="file" class="form-control  @error('fotoCarousel') is-invalid @enderror" id="fotoCarousel[]" name="fotoCarousel[]" multiple accept="image/*" >
                @error('fotoCarousel')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="inputTaxId">{{ __('Descripción') }}</label>
                <textarea class="form-control  @error('descripcion') is-invalid @enderror" name="descripcion">{{$producto->descripcion}}</textarea>
                @error('descripcion')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">{{ __('Editar producto') }}</button>
          </div>
        </form>
      </div>
    </div>
</section>
</div>
@endsection
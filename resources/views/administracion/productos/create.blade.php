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
        <form method="POST" action="{{ route ('productos.store')}}" enctype="multipart/form-data">
          @csrf             
          <div class="card-header">
            <h4>{{ __('Agregar nuevo producto') }}</h4>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">{{ __('Nombre') }}</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}" autocomplete="nombre" autofocus required>
                @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="">{{ __('Precio regular') }}</label>
                <input type="number" class="form-control  @error('precio') is-invalid @enderror" placeholder="Precio" name="precio" value="{{ old('precio') }}" autofocus="" >
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
                <input type="text" class="form-control  @error('marca') is-invalid @enderror" placeholder="Marca" name="marca" value="{{ old('marca') }}" autofocus="" >
                @error('marca')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="">{{ __('Categoría') }}</label>
                <input type="number" class="form-control  @error('categoria') is-invalid @enderror" placeholder="Categoría" name="" value="{{ old('categoria') }}" autofocus="" >
                @error('categoria')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">Foto principal</label>
                <input type="file" class="form-control  @error('fotoPrincipal') is-invalid @enderror" name="fotoPrincipal">
                @error('fotoPrincipal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="fotoCarousel">{{ __('Foto carousel') }}</label>
                <input type="file" class="form-control  @error('fotoCarousel') is-invalid @enderror" id="fotoCarousel[]" name="fotoCarousel[]" multiple accept="image/*">
                @error('fotoCarousel')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <br>
                {{ __('Podes cargar varias imagenes para el carousel.') }}
                <br>
                {{ __('Solo se aceptan imagenes con estos formatos: jpeg, png, jpg, svg.') }}
              </div>
              <div class="form-group col-md-12">
                <label for="inputTaxId">{{ __('Descripción') }}</label>
                <textarea class="form-control  @error('descripcion') is-invalid @enderror" value="{{ old('descripcion') }}" name="descripcion"></textarea>
                @error('descripcion')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">{{ __('Cargar producto') }}</button>
          </div>
        </form>
      </div>
    </div>
</section>
</div>
@endsection
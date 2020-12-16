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
        <form method="POST" action="{{ route ('categorias.store')}}" enctype="multipart/form-data">
          @csrf             
          <div class="card-header">
            <h4>{{ __('Agregar nueva categoría') }}</h4>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">{{ __('Nombre') }}</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}" autocomplete="nombre" autofocus required>
                @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">{{ __('Crear categoría') }}</button>
          </div>
        </form>
      </div>
    </div>
</section>
</div>
@endsection
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
        <form method="POST" action="{{ url ('categorias/' . $categoria->id)}}" enctype="multipart/form-data">
          @csrf  
          {{method_field('PATCH')}}           
          <div class="card-header">
            <h4>{{ __('Editar categoría') }} {{$categoria->nombre}}</h4>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">{{ __('Nombre') }}</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre" name="nombre" value=" {{$categoria->nombre}} " autofocus="">
                @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">{{ __('Editar categoría') }}</button>
          </div>
        </form>
      </div>
    </div>
</section>
</div>
@endsection
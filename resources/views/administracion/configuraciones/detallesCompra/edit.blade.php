@extends('administracion.head')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="main-content">
    <section class="section">
        <div class="row justify-content-center">
          <div class="card col-md-8">
            <form method="POST" action="{{ url ('detalleCompra/'.$detalleCompra->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="{{ $detalleCompra->id }}" />
                @csrf
                <div class="card-header">
                  <h4>{{ __('Editar pregunta') }} {{ $detalleCompra->id }}</h4>
                </div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="">{{ __('Título') }}</label>
                      <input type="text" class="form-control" name="titulo" value="{{ $detalleCompra->titulo }}" autofocus required>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="">{{ __('Descripción') }}</label>
                      <textarea class="form-control" name="descripcion" autofocus required >{{ $detalleCompra->descripcion }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" type="submit">{{__("Editar detalle")}}</button>
                </div>
            </form>
          </div>
        </div>
    </section>
</div>
@endsection


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
              <form method="POST" action="{{ route ('detalleCompra.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>{{ __('Agregar nuevo detalle de compra') }}</h4>
                </div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="">{{ __('Título') }}</label>
                      <input type="text" class="form-control" placeholder="Título" name="titulo" autofocus required>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="">{{ __('Descripción') }}</label>
                      <textarea class="form-control" name="descripcion" placeholder="Descripción" autofocus required ></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Agregar nuevo detalle</button>
                </div>
              </form>
            </div>
          </div>
      </section>
  </div>
@endsection

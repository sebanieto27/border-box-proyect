@extends('administracion.head')

@section('content')
<div class="main-content" style="min-height: 294px;">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Lista de productos</h4>
        <div class="card-header-form">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
              @foreach ($productos as $producto)
                <tr>
                  <td>{{$producto->id}}</td>
                  <td>{{$producto->nombre}}</td>
                  <td>{{$producto->precio}}</td>
                  <td>
                    <div class="badge badge-success">Activado</div>
                  </td>
                  <td>
                    <a href="{{url ('productos/' .$producto->id. '/edit' )}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                    <form class="btn btn-xs" action="{{url ('productos/' .$producto->id)}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm('Desea eliminar?');" data-toggle="modal"><i class="fa fa-trash-o"></i></button>
                    </form>
                  </td>
                </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
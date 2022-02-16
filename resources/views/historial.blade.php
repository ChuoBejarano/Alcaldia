@extends('layouts.app')

@section('content')
   <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Historial de Usuarios</strong></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="card col">
    <div clas="card body">
    <form action="{{route('buscar')}}" method="get" class="mt-1">
      <div class="input-group mb-3">
      <input type="text" class="form-control-lg" placeholder="Buscar Usuarios" name="busqueda">
            <button class="btn btn-outline-secondary" type="submit" id="buscar">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>
      </div>
        </form>
         @if (isset($data))
        <div class="panel panel-success">
            <div class="panel-heading"></div>
            <div class="panel-body">

                <div class='table-responsive'>
                  <table class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Movimientos</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data['user'] as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>Sin Movimientos</td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                        </table>

                      </div>
                    </div>  
                  </div>
                  @endif
@endsection
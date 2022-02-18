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
  <div class="card">
          <div class='card body'>
                  <table class='table text-center text-uppercase'>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Movimientos</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>Sin Movimientos</td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                        </table>
                          <div class="d-flex justify-content-center">
                               @if (count($user))
                                {{ $user->links() }}
                                @endif
                          </div>
                      </div>
                    </div>            
@endsection
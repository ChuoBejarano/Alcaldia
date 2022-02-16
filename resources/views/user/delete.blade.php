@extends('layouts.app')

@section('content')
   <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Eliminar Usuario</strong></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <form action="{{route('user.destroy',$data['user'])}}" method="POST" accept-charset="utf-8">
    @csrf @method('DELETE')
    <div class="card col-">
        <div class="card-body">
          <p>{{$data['user']->name}}</p>
            <table>
              <thead>
                <th>Permisos del Usuario</th>
              </thead>
              <tbody>
                 @foreach($data['permisos_user'] as $permisos)
                     <tr>
                       <td>
                         {{$permisos->role}}
                       </td>
                       <td>
                          {{$permisos->permission}}
                       </td>
                     </tr>
                    @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
      <label>¿Esta seguro que desea eliminar este usuario?</label>
      </div>
    <div class="d-flex justify-content-center">
      <a href="{{route('home')}}" class="btn btn-dark mx-2">Atras</a>
      <button type="submit" class="btn btn-primary">Eliminar</button>
    </div>  
  </form>
@endsection
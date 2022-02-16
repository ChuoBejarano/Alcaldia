@extends('layouts.app')

@section('content')
   <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Mostrar Usuario</strong></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
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
  <div class="card col-">
        <div class="card-body">
            <form method="POST" action="{{route('user.update',$data['user'])}}">
              @csrf @method('PATCH')
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                  <div>
                     <label>Permisos</label>   
                  </div>
                    @foreach($data['roles'] as $role)
                      <div class="checkbox">
                        <input type="checkbox" name="role_id[]" value="{{$role->id}}"> {{$role->role}}</input>       
                              @foreach($data['permissions'] as $permission)
                                @if($role->id==$permission->role_id)
                                  <input type="checkbox" name="permission_id[]" value="{{$permission->id}}"> {{$permission->permission}}
                                  </input>
                                @endif
                              @endforeach
                          @endforeach
                      </div>
                   </div>
                  <div class="d-flex justify-content-center">
                    <a href="{{route('home')}}" class="btn btn-dark mx-2">Atras</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>  
            </form>
@endsection
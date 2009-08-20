@extends('layouts.app')

@section('content')
   <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Modificar Usuario</strong></h1>
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
                    <div class="form-group">
                    <select class="select2" multiple="multiple" data-placeholder="Selecciona Roles" style="width: 50%;" name="role_id[]" id="roles">
                      
                  @foreach($data['roles'] as $role)
                    <option value="{{$role->id}}">{{$role->role}}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                    <select class="select2" multiple="multiple" data-placeholder="Selecciona Permisos" style="width: 50%;" name="permission_id[]" id="permisos">
                      @foreach($data['permissions'] as $permission)
                    <option value="{{$permission->id}}">{{$permission->permission}}</option>
                    @endforeach
                  </select>
                  </div>
                  <div class="d-flex justify-content-center">
                    <a href="{{route('home')}}" class="btn btn-dark mx-2">Atras</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>  
            </form>
<link rel="stylesheet" href="lib/AdminLTE/plugins/select2/css/select2.min.css">
<script src="lib/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
  <script>
    $('.select2').select2();
    </script>
@endsection
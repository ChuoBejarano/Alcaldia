@extends('layouts.app')

@section('content')
   <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Registrar Usuarios</strong></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  
  </div>
  <!-- /.content-header -->
  
  
    <div class="card col-">
        <div class="card-body">
            <form action="{{route('user.store')}}" method="POST" accept-charset="utf-8">
              @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
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
                    <select class="select2 permissionsItems" multiple="multiple" data-placeholder="Selecciona Permisos" style="width: 50%;" name="permission_id[]" id="permisos">
                      @foreach($data['permissions'] as $permission)
                    <option value="{{$permission->id}}">{{$permission->permission}}</option>
                    @endforeach
                  </select>
                  </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('home')}}" class="btn btn-dark mx-2">Atras</a>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>                    
            </form>
        </div>
     </div>
<link rel="stylesheet" href="lib/AdminLTE/plugins/select2/css/select2.min.css">
<script src="lib/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
      <script>
      $('.select2').select2();
     </script>
  <script type="text/javascript">
    $('select#roles').change(function(){
        let roleId = $(this).val();
        $permisositems = $('.permissionsItems');
        $.get('/permisos/'+roleId, function(data){
            $.each(data, function(index, element){
              console.log(element);
                $('select#permisos').append('<option value="'+element.id+'" class="permissionsItems">'+element.permission+'</option>')
            });
        }, 'json');
    });
</script>
@endsection




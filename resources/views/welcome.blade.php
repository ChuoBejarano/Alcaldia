@extends('layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><strong>Administración de usuarios</strong></h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="card">
    <div class="card-header">
      <div class="d-flex justify-content-between">
        <!--<form class="mt-1">
          <div class="input-group mb-3">
            <input type="text" class="form-control-lg" placeholder="Buscar Usuarios" aria-label="Buscar Usuarios" aria-describedby="buscar">
            <button class="btn btn-outline-secondary" type="button" id="buscar"><i class="bi bi-search"></i></button>
          </div>
        </form>-->
        <a href="{{ route('user.create') }}" class="btn btn-success">
          <i class="bi bi-person-plus"></i> Registrar
        </a>
      </div>
    </div>
    <div class="card-body">
      <table class="table text-center text-uppercase">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">Control</th>
          </tr>    
        </thead>
        @foreach($users as $user)
        <tbody>
          <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>
              <a href="{{ route('user.show',$user->id)}}">
              <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
              </a>
              <a href="{{ route('user.modify',$user->id)}}">
              <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
              </a>
              <a href="{{ route('user.delete',$user->id)}}">
              <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        @if (count($users))
        {{ $users->links() }}
        @endif
      </div>
    </div>
  </div>
@endsection
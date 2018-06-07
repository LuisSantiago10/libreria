@extends('layouts.layout')
  @section('content')
    <h1>Usuario</h1>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Estatus</th>
          <th> <a class="btn btn-outline-success" href="{{ url('/userbook/create') }}">Crear nuevo</a></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

            @foreach($user1 as $usuario)
              <tr>
                <th>{{ $usuario->name }}</th>
                <th>{{ $usuario->email }}</th>
                <th>
                  @if( $usuario->status_user == 1 )
                  <span class="btn btn-success">Activo</span>
                  @else
                  <span class="btn btn-danger">Baja</span>
                  @endif
                </th>
                <th><a href="{{URL::action('UserbookController@edit',$usuario->id_user)}}" class="btn btn-info">Editar</a></th>
              </tr>
            @endforeach

      </tbody>
    </table>
  
  @endsection

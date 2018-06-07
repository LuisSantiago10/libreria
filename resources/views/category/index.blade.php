@extends('layouts.layout')
  @section('content')
  <div class="row">
    <h1>Categorias</h1>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Estatus</th>
          <th> <a class="btn btn-outline-success" href="{{ url('/category/create') }}">Crear nuevo</a></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

            @foreach($cat as $categorias)
              <tr>
                <th>{{ $categorias->name }}</th>
                <th>{{ $categorias->description}}</th>
                <th>
                  @if( $categorias->status_cat == 1 )
                  <span class="btn btn-success">Activo</span>
                  @else
                  <span class="btn btn-danger">Baja</span>
                  @endif
                </th>
                <th><a href="{{URL::action('CategoryController@edit',$categorias->id_cat)}}" class="btn btn-info">Editar</a></th>
              </tr>
            @endforeach

      </tbody>
    </table>
</div>
  @endsection

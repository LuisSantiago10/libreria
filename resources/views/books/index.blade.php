@extends('layouts.layout')
  @section('content')
    <h1>categorias</h1>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Categoria</th>
          <th>Publicacion</th>
          <th>Usuario</th>
          <th>Estatus</th>
          <th> <a class="btn btn-outline-success" href="{{ url('/books/create') }}">Crear nuevo</a></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

            @foreach($book as $libro)
              <tr>
                <th>{{ $libro->name }}</th>
                <th>{{ $libro->author}}</th>
                <th>{{ $libro->category}}</th>
                <th>{{ $libro->author}}</th>
                <th>{{ $libro->published_date}}</th>
                <th>{{ $libro->id_user}}</th>
                <th>
                  @if( $libro->status_book == 1 )
                  <span class="btn btn-success">Activo</span>
                  @else
                  <span class="btn btn-danger">Baja</span>
                  @endif
                </th>
                <th><a href="{{URL::action('BooksController@edit',$libro->id_book)}}" class="btn btn-info">Editar</a></th>
              </tr>
            @endforeach

      </tbody>
    </table>
  @endsection

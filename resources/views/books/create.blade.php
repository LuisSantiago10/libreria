@extends('layouts.layout')
  @section('content')
  <div class="row">
    <h1>Prestado libro</h1>
    <div class="col-md-12">
      {!!Form::open(array('url'=>'books','method'=>'POST','autocomplete'=>'off'))!!}
              {{Form::token()}}
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre...">
              </div>
              <div class="form-group">
                <label for="descripcion">Autor</label>
                <input type="text" name="author" class="form-control" placeholder="Descripción...">
              </div>
              <div class="form-group">
                <label for="descripcion">Categoria</label>
                <select name="category">
                  @foreach($cat as $cate)
                  <option value="{{ $cate->id_cat }}">{{ $cate->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="descripcion">Fecha_publcacion</label>
                <input type="date" name="published_date" class="form-control" placeholder="Fecha de nacimiento...">
              </div>
              <div class="form-group">
                <label for="descripcion">Usuario</label>
                <select name="id_user">
                  @foreach($user as $usua)
                  <option value="{{ $usua->id_user }}">{{ $usua->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
              </div>
        {!!Form::close()!!}
    </div>
  </div>
  @endsection

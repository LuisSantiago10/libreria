@extends('layouts.layout')
  @section('content')

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
              <label for="descripcion">Category</label>
              <input type="text" name="category" class="form-control" placeholder="Descripción...">
            </div>
            <div class="form-group">
              <label for="descripcion">Fecha_publcacion</label>
              <input type="date" name="published_date	" class="form-control" placeholder="Descripción...">
            </div>
            <div class="form-group">
              <label for="descripcion">Usuario</label>
              <input type="text" name="id_user" class="form-control" placeholder="Descripción...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}
@endsection

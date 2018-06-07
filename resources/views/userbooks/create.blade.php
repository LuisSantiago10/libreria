@extends('layouts.layout')
  @section('content')
  <div class="row">
  <h1>Crear usuario</h1>
    <div class="col-md-12">
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
    </div>
      <div class="col-md-12">
        {!!Form::open(array('url'=>'userbook','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                    <div class="form-group">
                    	<label for="nombre">Nombre</label>
                    	<input type="text" name="name" class="form-control" placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                    	<label for="descripcion">email</label>
                    	<input type="email" name="email" class="form-control" placeholder="email...">
                    </div>
                    <div class="form-group">
                    	<button class="btn btn-primary" type="submit">Guardar</button>
                    	<button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
        			{!!Form::close()!!}
        </div>
  </div>
@endsection

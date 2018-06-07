@extends('layouts.layout')
  @section('content')
<div class="row">
  <h1>Editar categoria</h1>
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
      {!!Form::model($id_cat,['method'=>'PATCH','route'=>['category.update',$id_cat->id_cat]])!!}
                  {{Form::token()}}
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="name" value="{{$id_cat->name}}" class="form-control" placeholder="Nombre...">
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="description" value="{{$id_cat->description}}" class="form-control" placeholder="Descripción...">
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <select name="status_cat">
                      @if($id_cat->status_cat == 1)
                        <option value="1" selected="selected" >Activo</option>
                        <option value="0">Baja</option>
                        @else
                        <option value="1" >Activo</option>
                        <option value="0" selected="selected" >Baja</option>
                      @endif
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

@extends('layouts.layout')
  @section('content')

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
  @endsection

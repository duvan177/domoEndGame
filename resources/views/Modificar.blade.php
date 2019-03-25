@extends('principal')


@section('contenido')
<div>
<a href="{{ url('/componentes')}}"  type="button" class="btn btn-secondary btn-lg">Atras</a>



<form  action="/componentes/{{$datos->id}}/edit" method="POST">
  {{ csrf_field() }}

  
        <div class="form-group">
                <label >Nuevo nombre del componente</label>
        <input type="text" class="form-control" name="Nombre" value="{{$datos->Nombre}}">
        </div>
              <div class="form-group">
                <label> Nuevo tipo del Componente</label>
              <input type="text" class="form-control" name="TipoComp" value="{{$datos->TipoComp}}">
              </div>
              <div class="form-group">
                <label> Nuevo Estado</label>
              <input type="text" class="form-control" name="Estado" value="{{$datos->Estado}}">
          
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
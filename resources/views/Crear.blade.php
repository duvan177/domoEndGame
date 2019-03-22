@extends('principal')


@section('contenido')
<div>
<a href="{{ url('/componentes')}}"  type="button" class="btn btn-secondary btn-lg">Atras</a>

<form  action="/componentes" method="POST">
  {{ csrf_field() }}
  
        <div class="form-group">
                <label for="exampleInputEmail1">Nombre del componente</label>
                <input type="text" class="form-control" name="Nombre">
        </div>
              <div class="form-group">
                <label>Tipo Componente</label>
                <input type="text" class="form-control" name="TipoComp">
              </div>
              <div class="form-group">
                <label>Estado</label>
                  <input type="text" class="form-control" name="Estado">
          
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
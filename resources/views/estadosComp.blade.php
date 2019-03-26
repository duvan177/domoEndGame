@extends('principal')
@section('tittle', 'Estados')

@section('contenido')
<div class="container-fluid" style="width: 50%">
<div class="card">
  
<table class="table" id="recargarTable"  >     
    <thead class="thead-dark" >       
      <tr>
        <th scope="col">Componente</th>
        <th scope="col">Atributo</th>
        <th scope="col">Estado</th>        
      </tr>
    </thead>
    
    @foreach ($estados as $estado)  

    <tbody>
      <tr > 
        <td> {{$estado->comName}}</td>
        <td> {{$estado->nombre}}</td>
        @if ($estado->estado=="Apagado" ||$estado->estado=="Cerrado"||$estado->estado=="0" )
        <td style="color: red">{{$estado->estado}}</td>
        @else
        <td style="color: green">{{$estado->estado}}</td>

            
        @endif
        
        
        
      </tr>          
    @endforeach  
  </tbody>
</table>
</div>
</div>


{{-- <script>
  $(document).ready(function(){
    setInterval(
      function(){
        $('#recargarTable').load('recargar');
      },3000
    );
  });
</script>
 --}}


@endsection 

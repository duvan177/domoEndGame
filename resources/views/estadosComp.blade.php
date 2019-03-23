@extends('principal')
@section('tittle', 'Estados')

@section('contenido')




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
        <td>{{$estado->estado}}</td>
      </tr>          
    @endforeach  
  </tbody>
</table>



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

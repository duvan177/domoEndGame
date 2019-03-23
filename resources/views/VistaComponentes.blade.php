@extends('principal')
@section('tittle', 'Control')


@section('contenido')


{{-- le damos la funcion a los botones --}}

<script> 
    $(document).ready(function(){

            $('#puertaON').click(function(e){   

               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              }); 
               $.ajax({
                  url: "{{ url('/connect') }}",
                  method: 'post', 
                  data: {
                    _token: "{{ csrf_token() }}",
                    id: "1"
                  },                  
                  success: function(result){
                     console.log(result);
                  }});
               });

            $('#puertaOFF').click(function(e){  
              
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{ url('/disconnect') }}",
                  method: 'post',
                  data: {
                    _token: "{{ csrf_token() }}",
                    id: "1"
                  },   
                  success: function(result){
                     console.log(result);
                  }});
               });

  $('#ventanaON').click(function(e){   

               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              }); 
               $.ajax({
                  url: "{{ url('/connect') }}",
                  method: 'post', 
                  data: {
                    _token: "{{ csrf_token() }}",
                    id: "2"
                  },                  
                  success: function(result){
                     console.log(result);
                  }});
               });

            $('#ventanaOFF').click(function(e){  
              
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{ url('/disconnect') }}",
                  method: 'post',
                  data: {
                    _token: "{{ csrf_token() }}",
                    id: "2"
                  },   
                  success: function(result){
                     console.log(result);
                  }});
               });

               $('#bombilloON').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/connect') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "3"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#bombilloOFF').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/disconnect') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "3"
   },   
   success: function(result){
      console.log(result);
   }});
});


$('#interruptorON').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/connect') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "8"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#interruptorOFF').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/disconnect') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "8"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#camaraON').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/connect') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "5"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#camaraOFF').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/disconnect') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "5"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#sensorON').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/connect') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "6"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#sensorOFF').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/disconnect') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "6"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#aireON').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/connect') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "9"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#aireOFF').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/disconnect') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "9"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#dinMas').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/connect') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "4"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#dinMenos').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/disconnect') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "4"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#swinON').click(function(e){   

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
}); 
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post', 
   data: {
     _token: "{{ csrf_token() }}",
     id: "11",
     swin: "si"
   },                  
   success: function(result){
      console.log(result);
   }});
});

$('#swinOFF').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "11",
     swin:"no"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#fspeed1').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "10",
     fs:"1"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#fspeed2').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "10",
     fs:"2"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#fspeed3').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "10",
     fs:"3"
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#masTemp').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "7",
     val: 1,
     ty: "mas"
     
   },   
   success: function(result){
      console.log(result);
   }});
});

$('#menosTemp').click(function(e){  

e.preventDefault();
$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
});
$.ajax({
   url: "{{ url('/aireAcondicionado') }}",
   method: 'post',
   data: {
     _token: "{{ csrf_token() }}",
     id: "7",
     val: -1,
     ty: "menos"
   },   
   success: function(result){
      console.log(result);
   }});
});
    });
</script>


{{-- creamos el card e incrustamos los componentes de la BD --}}
<center>
<div style="width: 100%; margin-top: 2%; ">
<div style="width: 100%; max-height:auto;  ">
 @foreach ($componente as $componente)
<div class="card mb-3" style="width: 100%; background:#1BD194;">  
    <div class="row no-gutters">
        <div class="col-md-4">
            <img style="margin-left: 5%; height: 100px; width: 100px; margin-top:10%;" src="@if ($componente->nombre == "Puerta" )
            {{$img = '/img/puerta.png' }}  @endif 
            @if ($componente->nombre == "AireAcondicionado" )
            {{$img = '/img/aire.png' }}  @endif 
            @if ($componente->nombre == "Bombillo")
            {{$img = '/img/bombillo.png' }}  @endif 
            @if ($componente->nombre == "Camara")
            {{$img = '/img/camara.png' }}  @endif 
            @if ($componente->nombre == "InterruptorLamparas")
            {{$img = '/img/interruptor.png' }}  @endif 
            @if ($componente->nombre == "Dimmer")
            {{$img = '/img/dimmer.png' }}  @endif
            @if ($componente->nombre == "ControlTemperatura")
            {{$img = '/img/temperatura.png' }}  @endif
            @if ($componente->nombre == "SensorMovimiento")
            {{$img = '/img/sensor.png' }}  @endif
            @if ($componente->nombre == "Ventana")
            {{$img = '/img/ventana.png' }}  @endif  " 
            class="card-img" >
        </div>

        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title"> {{$componente->nombre}}</h5>
              <p class="card-text"><small class="text-muted">
              @if ($componente->nombre == "Puerta" )  <div class="btn-grbtn-group-toggleoup " data-toggle="buttons" >
                    <label class="btn btn-secondary active" id="puertaON">
                      <input type="radio" name="options" autocomplete="off" > OPEN
                    </label>
                    <label class="btn btn-secondary" id="puertaOFF">
                      <input type="radio" name="options"  autocomplete="off"> CLOSE
                    </label>                                                
                </div> 
                  @endif        
                  @if ( $componente->nombre == "Ventana") <div class="btn-grbtn-group-toggleoup " data-toggle="buttons" >
                      <label class="btn btn-secondary active" id="ventanaON">
                        <input type="radio" name="options1" id="option1" autocomplete="off" > OPEN
                      </label>
                      <label class="btn btn-secondary" id="ventanaOFF">
                        <input type="radio" name="options1" id="option2" autocomplete="off"> CLOSE
                      </label>                                                
                  </div>                                                                     
                @endif          
            @if ($componente->nombre == "Bombillo") <div class="btn-group btn-group-toggle" data-toggle="buttons" >
                      <label class="btn btn-secondary active" id="bombilloON">
                        <input type="radio" name="options2" id="option1" autocomplete="off" > CONNECT
                      </label>
                      <label class="btn btn-secondary" id="bombilloOFF">
                        <input type="radio" name="options2" id="option2" autocomplete="off"> DISCONNECT
                      </label>                        
                    </div>                     
                @endif
                @if ($componente->nombre == "SensorMovimiento") <div class="btn-group btn-group-toggle" data-toggle="buttons" >
                    <label class="btn btn-secondary active" id="sensorON">
                      <input type="radio" name="options3" id="option1" autocomplete="off" > CONNECT
                    </label>
                    <label class="btn btn-secondary" id="sensorOFF">
                      <input type="radio" name="options3" id="option2" autocomplete="off"> DISCONNECT
                    </label>                        
                  </div>                     
              @endif
              @if ($componente->nombre == "AireAcondicionado") <div class="btn-group btn-group-toggle" data-toggle="buttons" >
                  <label class="btn btn-secondary active" id="aireON">
                    <input type="radio" name="options4" id="option1" autocomplete="off" > CONNECT
                  </label>
                  <label class="btn btn-secondary" id="aireOFF">
                    <input type="radio" name="options4" id="option2" autocomplete="off"> DISCONNECT
                  </label>                        
                </div>                     
            @endif
            @if ($componente->nombre == "Camara") <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary " id="camaraON">
                  <input type="radio" name="options5" id="option1" autocomplete="off" > CONNECT
                </label>
                <label class="btn btn-secondary active" id="camaraOFF">
                  <input type="radio" name="options5" id="option2" autocomplete="off"> DISCONNECT
                </label>                        
              </div>                     
          @endif
          @if ($componente->nombre == "InterruptorLamparas") <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active" id="interruptorON">
              <input type="radio" name="options6" id="option1" autocomplete="off" > CONNECT
            </label>
            <label class="btn btn-secondary" id="interruptorOFF">
              <input type="radio" name="options6" id="option2" autocomplete="off"> DISCONNECT
            </label>                        
          </div>                     
      @endif
          
                  @if ($componente->nombre == "Dimmer" )                                     
                      <button type="button" class="btn btn-success" id="dinMenos"> - </button>                    
                      <button type="button" class="btn btn-success" id="dinMas"> + </button>                           
                  @endif
                  @if ($componente->nombre  == "ControlTemperatura" ) <div class="btn-group btn-group-toggle" data-toggle="buttons" >
                      <label class="btn btn-secondary active" id="swinON">
                        <input type="radio" name="options7" id="option1" autocomplete="off" > CONNECT
                      </label>
                      <label class="btn btn-secondary" id="swinOFF">
                        <input type="radio" name="options7" id="option2" autocomplete="off"> DISCONNECT
                      </label>                        
                    </div> 
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary "  id="fspeed1">
                          <input type="radio" name="options" id="option1" autocomplete="off" > 1
                        </label>
                        <label class="btn btn-primary" id="fspeed2">
                          <input type="radio" name="options" id="option2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-primary" id="fspeed3">
                          <input type="radio" name="options" id="option3" autocomplete="off"> 3
                        </label>
                      </div> 
                    <div class="btn-group btn-group-toggle" >
                       <button type="button" class="btn btn-success" id="menosTemp"> - </button>
                       <button type="button" class="btn btn-success" id="masTemp"> + </button>  
                    </div>                  
                  @endif
              </small></p>
            </div>
        </div>
    </div>
</div>
@endforeach 
</div>
</center>


  
@endsection 


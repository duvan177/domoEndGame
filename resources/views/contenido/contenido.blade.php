@extends('principal')
@section('contenido')
<main class="main">
<div class="container-fluid">
<div class="card text-center">
        <div class="card-header">
          DMOOS
        </div>
        <div class="card-body">
          <h5 class="card-title">Simulador Domotico </h5>
          <p class="card-text">Proyecto formativo desarrollado por el ADSI 151 en el cual se administrara
               un ambiente domotizado, modificando el estado de los objetos que lo componen, tales como 
               la iluminacion, vantanas, puerta, aire acondicionado, inicio de grabacion por medio de las camaras
                de seguridad, etc... proyecto desarrollado en php y Java escritorio



          </p>


          
                <center><form action="control">

                        <button type="submit" class="btn btn-warning" style="width:50%">in a controlador</button>

                   </form></center>
               
        </div>
        <div class="card-footer text-muted">
          ADSI-151
        </div>
      </div>
</div>
</main>
@endsection
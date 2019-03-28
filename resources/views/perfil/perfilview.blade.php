@extends('principal')
@section('contenido')
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

              </ul>
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Categorías
                    <a href="crearperfil.blade.php" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalPerfil">
                        <i class="icon-plus"></i>&nbsp;Nuevo perfil
                    </a>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control col-md-3" id="opcion" name="opcion">
                                  <option value="nombre">Nombre</option>
                                  <option value="descripcion">Descripción</option>
                                </select>
                                <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                           
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>Nombre del perfil</th>
                                <!--<th>Descripción</th>
                                <th>Estado</th>-->
                            </tr>
                        </thead>
                       <?php $num=0; $nombre="nombre";  ?>
                        @foreach ($perfiles as $perfil)
                        <tbody>
                            <tr>
                             
                            <?php $num++; $boton[$num]=$num; ?>
                           
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                      <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" name="{{$boton[$num]}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar" value="{{$id[$num]=$perfil->id}}">
                                    
                                      <i class="icon-trash"></i>
                                    </button>
                                </td>
                                
                                <td>{{$perfil->nombre}}</td> 
                              
                              
       

                                @endforeach
                                
                                
                                
                                <!--<td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-success">Activo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                      <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                      <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-success">Activo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                      <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                      <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-secondary">Inactivo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                      <i class="icon-pencil"></i>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                      <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-secondary">Inactivo</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                      <i class="icon-pencil"></i>
                                    </button>&nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                      <i class="icon-trash"></i>
                                    </button>
                                </td>
                                <td>Equipos</td>
                                <td>Dispositivos electrónicos</td>
                                <td>
                                    <span class="badge badge-success">Activo</span>
                                </td>-->
                            </tr>
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Ant</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sig</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Fin ejemplo de tabla Listado -->
        </div>
        <!--Inicio del modal agregar-->
        <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Perfil</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/perfil" action="/EstadoPerfil" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                           
                            <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div>
                                            <label class="col-md-3 form-control-label" for="text-input">Nombre:</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de categoría">
                                                
                                            </div>
                                        </div>
                            <br>
                            <div >
                                    <div class="input-group-prepend" >
                                      <label class="col-md-3 form-control-label" for="text-input">Puerta:</label>
                                    </div>
                                    <div class="col-md-9">
                                    <select class="custom-select form-control" name="puerta" id="inputGroupSelect01"class="margin-left:500px;">
                                      
                                      <option value="Abierta">Abierta</option>
                                      <option value="Cerrada">Cerrada</option>
                                    </select>
                                </div>
                                  </div>
                                  <br>
                                  <div>
                                        <div class="input-group-prepend" >
                                          <label class="col-md-3 form-control-label">Ventana:</label>
                                        </div>
                                        <div class="col-md-9">
                                        <select class="custom-select form-control" name="ventana"id="inputGroupSelect01"class="margin-left:500px;">
                                        
                                          <option value="Encendido">Abierta</option>
                                          <option value="Apagado">Cerrada</option>
                                        </select>
                                        </div>
                                      </div>
                                     <br>
                                  <div>
                                        <div class="input-group-prepend" >
                                          <label class="col-md-3 form-control-label">Bombillo:</label>
                                        </div>
                                        <div class="col-md-9">
                                        <select class="custom-select form-control" name="bombillo" id="inputGroupSelect01"class="margin-left:500px;">
                                         
                                          <option value="Encendido">Encendido</option>
                                          <option value="Apagado">Apagado</option>
                                        </select>
                                        </div>
                                      </div>
                                        <br>
                                      <div class="input-group mb-3">
                                            <div class="input-group-prepend" >
                                              <label class="col-md-3" >Dimmer:</label>
                                            </div>
      
                                            <input id="temperatura" type="range" name="dimmer"
                                            min="1" max="100" step="3"> 
                                            <div> <br><span id="temp" class="input-group-prepend">50</span></div>
                                      </div>
                                            
                                        
                                        
                                          <div>
                                                <div class="input-group-prepend" >
                                                  <label class="col-md-3 form-control-label">Camara:</label>
                                                </div>
                                                <div class="col-md-9">
                                                <select class="custom-select form-control" name="camara" id="inputGroupSelect01"class="margin-left:500px;">
                                                 
                                                  <option value="Encendido">Encendido</option>
                                                  <option value="Apagado">Apagado</option>
                                                </select>
                                                </div>
                                              </div>
                                             <br>
                                              <div>
                                                    <div class="input-group-prepend" >
                                                      <label class="col-md-3 form-control-label" style="text-align:left;">Aire:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                    <select class="custom-select form-control" name ="aire" id="inputGroupSelect01"class="margin-left:500px;">
                                                     
                                                      <option value="Encendido">Encendido</option>
                                                      <option value="Apagado">Apagado</option>
                                                    </select>
                                                </div>
                                                  </div>
                                                  <br>
                                                  <div>
                                                        <div class="input-group-prepend" >
                                                          <label class="col-md-3 form-control-label" >Sensor:</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                        <select class="custom-select form-control" name="sensor" id="inputGroupSelect01"class="margin-left:500px;">
                                                         
                                                          <option value="Encendido">Encendido</option>
                                                          <option value="Apagado">Apagado</option>
                                                        </select>
                                                        </div>
                                                      </div>
                                                     <br>
                                                      <div >
                                                            <div class="input-group-prepend form-control-label" >
                                                              <label class="col-md-3" style="text-align:left;">C.temperatura(Interruptor):</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                            <select class="custom-select form-control" name="control" id="inputGroupSelect01"class="margin-left:500px;">
                                                              
                                                              <option value="Encendido">Encendido</option>
                                                              <option value="Apagado">Apagado</option>
                                                            </select>
                                                            </div>
                                                          </div>
                                                         <br>
                                                          <div >
                                                                <div class="input-group-prepend form-control-label" class="margin-left:50px;">
                                                                  <label class="col-md-3" style="text-align:left;">Interruptor Lampara:</label>
                                                                </div>
                                                                <div class="col-md-9">
                                                                <select class="custom-select form-control" name="interruptorlampara" id="inputGroupSelect01"class="margin-left:500px;">
                                                                  
                                                                  <option value="Encendido">Encendido</option>
                                                                  <option value="Apagado">Apagado</option>
                                                                </select>
                                                                </div>
                                                              </div>
                               
                            </div>
                            <div class="modal-footer" style="margin-left:40px; margin-top:100px;">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                
                        </form>
                    </div>
                    
                </div>
               <!--  /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->


                               <!-- Inicio del modal Eliminar -->
        <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-danger" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar Categoría</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>

                        
                    </div>
                    
                    <div class="modal-body">
                       
                        <p>Estas seguro de eliminar la categoría?</p>

                        <form action="{{ url('/perfildele', ['perfildele' => $perfil->id])}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            
                            
                                <button type="button" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" >Eliminar</button>  
                                
                            </form>

                  </div>
                  
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Fin del modal Eliminar -->


  <!--Inicio del modal perfilconcomponentes-->
  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/Perfil" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de categoría">
                            <span class="help-block">(*) Ingrese el nombre de la categoría</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                        <div class="col-md-9">
                            <input type="email" id="descripcion" name="descripcion" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

      

        <div class="modal-title">Felipe Estrada programming</div>
    </main>
    <script>
            addEventListener('load',inicio,false);
          
            function inicio()
            {
              document.getElementById('temperatura').addEventListener('change',cambioTemperatura,false);
            }
          
            function cambioTemperatura()
            {    
              document.getElementById('temp').innerHTML=document.getElementById('temperatura').value;
            }
          </script> 
@endsection
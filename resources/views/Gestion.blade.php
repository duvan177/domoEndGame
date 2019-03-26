@extends('principal')


@section('contenido')
{{ csrf_field() }}
<main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <center> <h3>COMPONENTES POR DEFECTO</h3></center>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                        <i class="icon-plus"></i>&nbsp;Nuevo    
                    </button>
                </div>
           
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                               
                                <th>id</th>
                                <th>Nombre componente</th>
                                <th>Tipo componente</th>
                                 <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datos as $da)
                            <tr>
                               
                                <td>{{$da->id}}</td>
                                <td>{{$da->nomCompo}}</td>
                                <td>{{$da->nombre}}</td>
                                <td>
                                        <button type="button" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        
                                       
                                    </td>
                            </tr>

                            
                            
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            <center> <h3>COMPONENTES CREADOS</h3></center>
            <div class="card">
                
               
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                   
                                    <th>id</th>
                                    <th>Nombre componente</th>
                                    <th>Tipo componente</th>
                                    <th>Estado</th>
                                     <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($datosb as $dab)
                                <tr>
                                   
                                    <td>{{$dab->id}}</td>
                                    <td>{{$dab->Nombre}}</td>
                                    <td>{{$dab->TipoComp}}</td>
                                    <td>{{$dab->Estado}}</td>
                                  <td>
                                  <button type="button" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#modalEditar">
                                                <i class="icon-pencil"></i>
                                              </button> &nbsp;
                                            
                                                
                                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                                <i class="icon-trash"></i>
                                              </button> 


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
                                                                <p>Estas seguro de eliminar el componente?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            <form action="componentes/{{$dab->id}}" method="POST">
                                                                    {{method_field('DELETE')}}
                                                                    {{ csrf_field() }}
                                        
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                    </td>
                                </tr>
                                
        <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Editar componente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="componentes/{{$dab->id}}" method="POST"  class="form-horizontal">
                            {{method_field('PUTH')}}
                                    {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre nuevo</label>
                                    <div class="col-md-9">
                                    <input type="text" id="nombre" name="nom" class="form-control" value="{{$dab->id}}">
                                      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Tipo nuevo</label>
                                    <div class="col-md-9">
                                        <input type="text" id="descripcion" name="TipoComp" class="form-control" placeholder="Tipo del componente">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Estado nuevo</label>
                                    <div class="col-md-9">
                                        <input type="text" id="descripcion" name="Estado" class="form-control" placeholder="Estado del componente">
                                    </div>
                                </div>
                                <button type="sumbit" class="btn btn-secondary">Actualizar</button>
                            </form>
                        </div>
                        
                        
                           
                          
                      
            
                
                </div>
                
            </div>
     </div>




     
                                
                                @endforeach
                            </tbody>
                        </table>
                       
                    </div>
                </div>
           
                
            <!-- Fin ejemplo de tabla Listado -->
        

    
        
        <!--Inicio del modal agregar/actualizar-->
        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar componente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="componentes" method="POST"  class="form-horizontal">
                                {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                                <div class="col-md-9">
                                    <input type="text" id="nombre" name="nom" class="form-control" placeholder="Nombre del componente">
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Tipo</label>
                                <div class="col-md-9">
                                    <input type="text" id="descripcion" name="TipoComp" class="form-control" placeholder="Tipo del componente">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Estado</label>
                                <div class="col-md-9">
                                    <input type="text" id="descripcion" name="Estado" class="form-control" placeholder="Estado del componente">
                                </div>
                            </div>
                            <button type="sumbit" class="btn btn-secondary">Crear</button>
                        </form>
                    </div>
                    
                       
                      
                  
        
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        </div>
         <div class="modal fade" id="modalEditar2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Editar componente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="componentes/{{$da->id}}" method="POST"  class="form-horizontal">
                            {{method_field('PUTH')}}
                                    {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre nuevo</label>
                                    <div class="col-md-9">
                                    <input type="text" id="nombre" name="nom" class="form-control" value="{{$dab->id}}">
                                      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Tipo nuevo</label>
                                    <div class="col-md-9">
                                        <input type="text" id="descripcion" name="TipoComp" class="form-control" placeholder="Tipo del componente">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Estado nuevo</label>
                                    <div class="col-md-9">
                                        <input type="text" id="descripcion" name="Estado" class="form-control" placeholder="Estado del componente">
                                    </div>
                                </div>
                                <button type="sumbit" class="btn btn-secondary">Actualizar</button>
                            </form>
                        </div>
                        
                        
                           
                          
                      
            
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
     </div>

                                
       
             
        <!--Fin del modal-->
        <!-- Inicio del modal Eliminar -->
        
        <!-- Fin del modal Eliminar -->

        
    </main>
@endsection
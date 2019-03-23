<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estadosxatributo ;
use DB;


class atributoController extends Controller{

    public function index (){

        $estados = DB::table('estadoactualxcomponentes')
        ->join('atributosxtipos', 'atributosxtipos.id', '=', 'estadoactualxcomponentes.idAtributoXtipo' )
        ->join('componentes', 'componentes.id', '=', 'estadoactualxcomponentes.idComponente' )
        ->join('estadosxatributos', 'estadosxatributos.id', '=', 'estadoactualxcomponentes.idEstadoActual' )
        ->select ('estadoactualxcomponentes.id' , 'componentes.nombre as comName'  , 'atributosxtipos.nombre'  , 'estadosxatributos.estado')
        ->orderBy('componentes.nombre')
        ->get();
    
         return view ('estadosComp' , compact('estados'));
        
    }



    public function conectar(Request $request){

        $id = $request->id;

         if ($id == 1 || $id == 2  ) {

        $estados=estadosxatributo::find($id);      

        $estados->estado='Abierta';   
        $estados->save();

        return $estados;

         }


        if ($id == 3 ||  $id == 5 || $id == 6 ||  $id == 8 || $id == 9 ) {

            $estados=estadosxatributo::find($id);      
    
            $estados->estado='Encendido';   
            $estados->save();
    
            return $estados;
    
        }


        if ($id == 4 ) {

            $estados=estadosxatributo::find($id); 

            if ($estados->estado <100) {
            
            $val = $estados->estado + 1;     
    
            $estados->estado=$val;   
            $estados->save();
    
            return $estados;

            }
    
        }
        

    }

    public function desconectar(Request $request){    
        
        $id = $request->id;

        if ($id == 1 || $id == 2 ) {

       $estados=estadosxatributo::find($id);      

       $estados->estado='Cerrado';   
       $estados->save();

       return $estados;

        }


       if ($id == 3 ||  $id == 5 || $id == 6 ||  $id == 8 || $id == 9 ) {

           $estados=estadosxatributo::find($id);      
   
           $estados->estado='Apagado';   
           $estados->save();
   
           return $estados;
   
       }


        if ($id == 4 ) {

            $estados=estadosxatributo::find($id); 

        if ($estados->estado >0) {
            $val = $estados->estado - 1;     

            $estados->estado=$val;   
            $estados->save();

        return $estados;

        }

}



}


        function aireAcondicionado (Request $request)  {

            $estados=estadosxatributo::find($request->id); 

            if($request->id == "11") { 
            if($request->swin == "si"){
                $estados->estado='Encendido';
                $estados->save();}
            else { 
                $estados->estado='Apagado';
                $estados->save();
                }
            return $estados; }
            

            if($request->id == "10") {

            if($request->fs == "1"){
                $estados->estado= 1;
                $estados->save();
                }
                if($request->fs == "2"){
                    $estados->estado= 2;
                    $estados->save();
                    }
                    if($request->fs == "3"){
                        $estados->estado= 3;
                        $estados->save();
                        }
                        
                        return $estados;
                    }


             if($request->id == "7") {               

                $num=$estados->estado;

               if($request->ty == "menos"){
                   if ($num>16) {
                       $estados->estado = $num-1;
                       $estados->save();
                       return $estados;
                   }
               }

               if($request->ty == "mas"){
                if ($num<32) {
                    $estados->estado = $num+1;
                    $estados->save();
                    return $estados;
                }
            }
              

           }
                  
                    
        }



}
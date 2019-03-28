<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EstadoPerfil;
class PerfilController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$articulos = \DB::table('pefilesyalarmas')->select('id','nombre','idUsuario')->get();
        $id=Auth::id();
       
        $perfilesyalarmas =Perfil::all();
        $perfiles=$perfilesyalarmas->where('idUsuario','=',$id);
        $num=0;
        return view('perfil/perfilview',compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('perfil/perfilview');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $this->validate($request,[
  'nombre'=>'required'
  
  ]);

        $id = Auth::id();
        settype($id,"integer");
        $perfil = new Perfil();
        $perfil->id = null;
        $id_perfil=$perfil->id;
        $perfil->nombre = $request->input('nombre');
        $perfil->idUsuario =$id;
        $perfil->save();
        $idperfil=$perfil->id;
        //puerta
        $estado = new EstadoPerfil();
        $estado->id=null;
        $estado->idComponente=1;
        $estado->idPerfilAlarma=$idperfil;
        $estado->idAtributoXtipo=1;
        $estado->EstadoProgramado= $request->input('puerta');
        $estado->save();
       //ventana
       $estado2 = new EstadoPerfil();
       $estado2->id=null;
       $estado2->idComponente=2;
       $estado2->idPerfilAlarma=$idperfil;
       $estado2->idAtributoXtipo=2;
       $estado2->EstadoProgramado= $request->input('ventana');
       $estado2->save();
        //Bombillo
        $estado3 = new EstadoPerfil();
        $estado3->id=null;
        $estado3->idComponente=0;
        $estado3->idPerfilAlarma=$idperfil;
        $estado3->idAtributoXtipo=3;
        $estado3->EstadoProgramado= $request->input('bombillo');
        $estado3->save();
        //Dimmer
        $estado4 = new EstadoPerfil();
        $estado4->id=null;
        $estado4->idComponente=4;
        $estado4->idPerfilAlarma=$idperfil;
        $estado4->idAtributoXtipo=4;
        $estado4->EstadoProgramado= $request->input('dimmer');
        $estado4->save();
        //camara
        $estado5 = new EstadoPerfil();
        $estado5->id=null;
        $estado5->idComponente=8;
        $estado5->idPerfilAlarma=$idperfil;
        $estado5->idAtributoXtipo=5;
        $estado5->EstadoProgramado= $request->input('camara');
        $estado5->save();
        //aire
        $estado6 = new EstadoPerfil();
        $estado6->id=null;
        $estado6->idComponente=5;
        $estado6->idPerfilAlarma=$idperfil;
        $estado6->idAtributoXtipo=9;
        $estado6->EstadoProgramado= $request->input('aire');
        $estado6->save();
        //sensor
        $estado7 = new EstadoPerfil();
        $estado7->id=null;
        $estado7->idComponente=6;
        $estado7->idPerfilAlarma=$idperfil;
        $estado7->idAtributoXtipo=6;
        $estado7->EstadoProgramado= $request->input('sensor');
        $estado7->save();
        //control temperatura
        $estado8 = new EstadoPerfil();
        $estado8->id=null;
        $estado8->idComponente=7;
        $estado8->idPerfilAlarma=$idperfil;
        $estado8->idAtributoXtipo=8;
        $estado8->EstadoProgramado= $request->input('control');
        $estado8->save();
        //Interruptor lampara
        $estado9 = new EstadoPerfil();
        $estado9->id=null;
        $estado9->idComponente=3;
        $estado9->idPerfilAlarma=$idperfil;
        $estado9->idAtributoXtipo=9;
        $estado9->EstadoProgramado= $request->input('interruptorlampara');
        
        
        
        
        //Llamamos los datos de estado actual por componente
       /* $idPerfil = DB:: table('programacionxcomponente')
        ->join('perfilesyalarmas','perfilesyalarmas.id','=','programacionxcomponente.idPerfilAlarma')
        ->join('componentes','componentes.id','=','programacionxcomponente.idComponente')
        ->select('idComponente','idPerfilAlarma','EstadoProgramado','idAtributoXtipo','perfilesyalarmas.nombre','componentes.nomCompo')
        ->where('perfilesyalarmas.idUsuario','=',Auth::id())
        ->get();
        //return view('perfil/perfilview');*/
        
        
        return redirect('perfil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */

    public function destroy($perfil)
    {
        
        //
        
        Perfil::destroy($perfil);
     
        return redirect('perfil');
    }
}
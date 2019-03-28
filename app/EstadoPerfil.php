<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoPerfil extends Model
{
    protected $table = 'programacionxcomponentes';
    protected $fillable = ['id','idComponente','idPerfilAlarma','idAtributoXtipo','EstadoProgramado'];
}

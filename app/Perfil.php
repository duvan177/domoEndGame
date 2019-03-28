<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfilesyalarmas';
    protected $fillable = ['id','nombre','idUsuario'];
}

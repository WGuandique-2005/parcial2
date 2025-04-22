<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    protected$fillable = [
        'name',
        'username',
        'email',
        'password',
        'edad'
    ];

    public function historias(){
        return $this->hasMany(HistoriaModel::class);
    }

    public function comentarios(){
        return $this->hasMany(ComentarioModel::class);
    }
    public function votos(){
        return $this->hasMany(VotoModel::class);
    }
}

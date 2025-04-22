<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComentarioModel extends Model
{
    protected $fillable = [
        'usuario_id',
        'historia_id',
        'contenido'
    ];

    public function usuario()
    {
        return $this->belongsTo(UsuarioModel::class);
    }

    public function historia()
    {
        return $this->belongsTo(HistoriaModel::class);
    }
}

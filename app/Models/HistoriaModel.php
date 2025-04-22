<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaModel extends Model
{
    protected $fillable = [
        'titulo',
        'contenido',
        'categoria',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(UsuarioModel::class);
    }

    public function categoria()
    {
        return $this->belongsToMany(CategoriaModel::class);
    }
}

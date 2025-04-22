<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VotoModel extends Model
{
    protected $fillable = [
        'usuario_id',
        'historia_id',
        'tipo_voto'
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

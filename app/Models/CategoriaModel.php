<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function historias()
    {
        return $this->hasMany(HistoriaModel::class);
    }
}

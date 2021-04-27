<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model {

    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'codigo_snies',
        'resolucion',
        'estado',
    ];

}

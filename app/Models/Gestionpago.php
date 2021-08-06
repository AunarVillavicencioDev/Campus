<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionpago extends Model {

    use HasFactory;

    protected $fillable = [
        'user_id',
        'url_file',
        'description',
        'creation_date',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajo extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'servicio',
        'costo',
        'observaciones',
    ];
}

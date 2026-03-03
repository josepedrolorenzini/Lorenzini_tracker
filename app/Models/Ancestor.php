<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Importa el Trait
use Illuminate\Database\Eloquent\Model;

class Ancestor extends Model
{
    use HasFactory; // 2. Activa el Trait aquí adentro //

    protected $table = 'ancestors';

    protected $fillable = [
        'first_name',
        'last_name',
        'relationship',
        'birth_date',
        'birth_place',
        'death_date',
        'bio'
    ];
}

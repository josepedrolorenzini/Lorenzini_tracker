<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //table
    protected $table = 'istituzioni';

    //fillable
    protected $fillable = [
        'name',
        'email',
        'location',
        'priority',
    ];


}

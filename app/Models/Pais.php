<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    protected $table = 'paises';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'confirmed'
    ];
    //No enviar estos campos en la API
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}

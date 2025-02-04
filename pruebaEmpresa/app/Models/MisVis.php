<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisVis extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'mision',
        'vision',
        'imagenMision',
        'imagenVision',
        'imagenPrincipal',
        'imagenLogo',
        'status'
    ];
}

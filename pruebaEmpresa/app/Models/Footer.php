<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footers extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'facebook',
        'instagram',
        'tiktok',
        'telefon',
        'correo',
        'localizacion',
        'status'
    ];
}

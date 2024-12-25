<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carruelimagens extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'imagen1',
        'imagen2',
        'imagen3',
        'status'
    ];
}

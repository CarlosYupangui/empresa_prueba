<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetivos extends Model
{
    use HasFactory;protected $fillable = [
        'Titulo1',
        'titulo2',
        'titulo3',
        'objetivo1',
        'objetivo2',
        'objetivo3',
        'status'
    ];
    
    
}

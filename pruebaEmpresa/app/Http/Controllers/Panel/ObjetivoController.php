<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObjetivoController extends Controller
{
    public function index(){
        return view('admin.objetivos.index');
    }
    
    public function edit(){
        
        return view('Admin.objetivos.edit');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
       
        return view('layouts.index');
    }
    
    public function login(){
       
        return view('layouts.login');
    }
}

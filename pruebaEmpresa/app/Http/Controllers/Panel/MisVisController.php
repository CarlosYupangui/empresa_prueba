<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function index(){
          return view('admin.MisVis.index');
    }
    
    public function edit(){
        
        return view('Admin.MisVis.edit');
    }
}

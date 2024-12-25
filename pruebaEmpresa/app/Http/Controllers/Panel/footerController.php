<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class footerController extends Controller
{
    public function index(){
        return view('admin.footer.index');
    }
    
    public function edit(){
        
        return view('Admin.footer.edit');
    }
}

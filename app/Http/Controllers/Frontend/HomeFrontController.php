<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeFrontController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function indexhome()
    {
        return view('Backend.home.index');
    }
    
}

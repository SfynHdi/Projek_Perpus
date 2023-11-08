<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriFrontController extends Controller
{
    public function index(){
        return view('front.home.kategori');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $titulo = "Turismo Brasil";
        return view('home.index', compact('titulo'));
    }
} 

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatoGrossoController extends Controller
{
    public function matoGrosso(){
        $titulo = "Mato Grosso";
        return view('matoGrosso.matoGrosso', compact('titulo'));
    }
}

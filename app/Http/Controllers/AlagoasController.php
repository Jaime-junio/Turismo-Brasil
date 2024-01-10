<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlagoasController extends Controller
{
    public function alagoas(){
        $titulo = "Alagoas";
        return view('alagoas.alagoas', compact('titulo'));
    }
}

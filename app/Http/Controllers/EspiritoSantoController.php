<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EspiritoSantoController extends Controller
{
    public function espiritoSanto(){
        $titulo = "espiritoSanto";
        return view('espiritoSanto.espiritoSanto', compact('titulo'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RioDeJaneiroController extends Controller
{
    public function rioDeJaneiro(){
        $titulo = "rioDeJaneiro";
        return view('rioDeJaneiro.rioDeJaneiro', compact('titulo'));
    }
}

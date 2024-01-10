<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RioGrandeDoNorteController extends Controller
{
    public function rioGrandeDoNorte(){
        $titulo = "rioGrandeDoNorte";
        return view('rioGrandeDoNorte.rioGrandeDoNorte', compact('titulo'));
    }
}

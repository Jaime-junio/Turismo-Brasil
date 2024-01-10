<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PernambucoController extends Controller
{
    public function pernambuco(){
        $titulo = "pernambuco";
        return view('pernambuco.pernambuco', compact('titulo'));
    }
}

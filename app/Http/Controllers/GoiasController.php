<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoiasController extends Controller
{
    public function goias(){
        $titulo = "goias";
        return view('goias.goias', compact('titulo'));
    }
}

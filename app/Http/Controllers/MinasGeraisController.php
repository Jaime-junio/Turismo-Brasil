<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MinasGeraisController extends Controller
{
    public function minasGerais(){
        $titulo = "minasGerais";
        return view('minasGerais.minasGerais', compact('titulo'));
    }
}

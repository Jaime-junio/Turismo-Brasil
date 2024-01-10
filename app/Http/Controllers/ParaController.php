<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParaController extends Controller
{
    public function para(){
        $titulo = "para";
        return view('para.para', compact('titulo'));
    }
}

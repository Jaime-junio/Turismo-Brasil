<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatoGrossoDoSulController extends Controller
{
    public function matoGrossoDoSul(){
        $titulo = "Mato Grosso Do Sul";
        return view('matoGrossoDoSul.matoGrossoDoSul', compact('titulo'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmazonasController extends Controller
{
    public function amazonas(){
        $titulo = "amazonas";
        return view('amazonas.amazonas', compact('titulo'));
    }
}

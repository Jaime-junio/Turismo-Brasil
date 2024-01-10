<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CearaController extends Controller
{
    public function ceara(){
        $titulo = "ceara";
        return view('ceara.ceara', compact('titulo'));
    }
}

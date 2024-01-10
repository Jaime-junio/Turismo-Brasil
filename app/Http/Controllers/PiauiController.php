<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PiauiController extends Controller
{
    public function piaui(){
        $titulo = "piaui";
        return view('piaui.piaui', compact('titulo'));
    }
}

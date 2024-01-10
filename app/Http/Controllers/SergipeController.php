<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SergipeController extends Controller
{
    public function sergipe(){
        $titulo = "sergipe";
        return view('sergipe.sergipe', compact('titulo'));
    }
}

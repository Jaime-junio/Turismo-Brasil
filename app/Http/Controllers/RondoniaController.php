<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RondoniaController extends Controller
{
    public function rondonia(){
        $titulo = "rondonia";
        return view('rondonia.rondonia', compact('titulo'));
    }
}

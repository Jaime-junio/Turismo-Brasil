<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BahiaController extends Controller
{
    public function bahia(){
        $titulo = "bahia";
        return view('bahia.bahia', compact('titulo'));
    }
}

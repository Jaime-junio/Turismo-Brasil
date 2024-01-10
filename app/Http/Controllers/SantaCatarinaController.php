<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SantaCatarinaController extends Controller
{
    public function santaCatarina(){
        $titulo = "santaCatarina";
        return view('santaCatarina.santaCatarina', compact('titulo'));
    }
}

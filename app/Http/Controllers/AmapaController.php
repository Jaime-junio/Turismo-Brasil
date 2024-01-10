<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmapaController extends Controller
{
    public function amapa(){
        $titulo = "amapa";
        return view('amapa.amapa', compact('titulo'));
    }
}

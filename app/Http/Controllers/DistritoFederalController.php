<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistritoFederalController extends Controller
{
    public function distrito(){
        $titulo = "distrito";
        return view('distrito.distrito', compact('titulo'));
    }
}

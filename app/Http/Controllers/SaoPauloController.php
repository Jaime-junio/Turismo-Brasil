<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaoPauloController extends Controller
{
    public function saoPaulo(){
        $titulo = "saoPaulo";
        return view('saoPaulo.saoPaulo', compact('titulo'));
    }
}

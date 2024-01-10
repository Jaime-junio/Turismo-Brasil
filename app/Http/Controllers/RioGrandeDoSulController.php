<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RioGrandeDoSulController extends Controller
{
    public function rioGrandeDoSul(){
        $titulo = "rioGrandeDoSul";
        return view('rioGrandeDoSul.rioGrandeDoSul', compact('titulo'));
    }
}

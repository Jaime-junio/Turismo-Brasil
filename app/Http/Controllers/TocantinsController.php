<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TocantinsController extends Controller
{
    public function tocantins(){
        $titulo = "tocantins";
        return view('tocantins.tocantins', compact('titulo'));
    }
}

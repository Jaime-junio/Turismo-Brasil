<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaranhaoController extends Controller
{
    public function maranhao(){
        $titulo = "maranhao";
        return view('maranhao.maranhao', compact('titulo'));
    }
}

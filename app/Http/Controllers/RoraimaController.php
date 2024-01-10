<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoraimaController extends Controller
{
    public function roraima(){
        $titulo = "roraima";
        return view('roraima.roraima', compact('titulo'));
    }
}

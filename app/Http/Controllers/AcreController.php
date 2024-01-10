<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcreController extends Controller
{
    public function acre(){
        $titulo = "Acre";
        return view('acre.acre', compact('titulo'));
    }
}

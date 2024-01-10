<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParaibaController extends Controller
{
    public function paraiba(){
        $titulo = "paraiba";
        return view('paraiba.paraiba', compact('titulo'));
    }
}

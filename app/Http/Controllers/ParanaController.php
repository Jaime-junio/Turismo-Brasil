<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParanaController extends Controller
{
    public function parana(){
        $titulo = "parana";
        return view('parana.parana', compact('titulo'));
    }
}

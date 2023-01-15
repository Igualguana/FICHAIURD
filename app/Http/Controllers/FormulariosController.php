<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function formularios_inicio(){
        return view('formularios.home');
    }
}

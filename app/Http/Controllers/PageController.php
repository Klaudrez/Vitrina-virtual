<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//paginas de acceso libre

class PageController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
}

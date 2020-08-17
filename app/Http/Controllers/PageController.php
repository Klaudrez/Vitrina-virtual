<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\App as FacadesApp;

//paginas de acceso libre

class PageController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function marketplace()
    {
        return view('marketplace');
    }
    public function acercaDe()
    {
        return view('acercaDe');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin'); //Solo Admin access: 'auth:admin' // crear admin 'guest:admin'
    } 
    public function SolicitudesDeProductos()
    {
        $producto=App\Producto::all();
        return view('admin.SolicitudesDeProductos', compact('producto'));

    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function crear_cita()
    {
        return view('citas.crear_cita');
    }

    public function store()
    {
        return "Hola";
    }
}

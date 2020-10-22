<?php

namespace App\Http\Controllers;

class GenerarFacturaController extends Controller
{
    public function index(){
        return view('factura/index');
    }

    public function create(){
        return view('factura/nueva');
    }

    public function imprimir(){

        $pdf = \PDF::loadView('factura/plantilla');
        $pdf->setPaper(array(0, 0, 453.5433070866, 612.2834645669), 'portrait');

        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers;

class GenerarFacturaController extends Controller
{
    //
    public function imprimir(){

        $pdf = \PDF::loadView('Plantillas/factura');
        $pdf->setPaper(array(0, 0, 453.5433070866, 612.2834645669), 'portrait');

        return $pdf->stream();
    }
}

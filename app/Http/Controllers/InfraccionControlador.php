<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfraccionControlador extends Controller
{
    /*public function showInfraccion($id_infra)
    {
        return view('infraccion', ['id_infra' => $id_infra]);
    }*/

    public function showInfraccion(Request $request)
    {
        $codigo_infra = $request->input('codigo_infra');
        $descripcion = $request->input('descripcion');
        $calificacion = $request->input('calificacion');
        $m_preventivas = $request->input('m_preventivas');
        $consecuencia = $request->input('consecuencia');

        return view('infraccion', compact('codigo_infra', 'descripcion', 'calificacion', 'm_preventivas','consecuencia'));
    }
}

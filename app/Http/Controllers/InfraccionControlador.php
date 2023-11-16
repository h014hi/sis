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
        $infra_id       = $request->input('infra_id');
        $codigo         = decrypt($request->input('codigo'));
        $tipo           = decrypt($request->input('tipo'));
        $descripcion    = decrypt($request->input('descripcion'));
        $calificacion   = decrypt($request->input('calificacion'));
        $m_preventivas  = decrypt($request->input('m_preventivas'));
        $consecuencia   = decrypt($request->input('consecuencia'));

        return view('infraccion', compact('codigo','tipo', 'descripcion', 'calificacion', 'm_preventivas','consecuencia'));
    }
}

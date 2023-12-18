<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;

class UbigeoController extends Controller
{
    public function getProvinces()
    {
        $provinces = Province::all();
        return response()->json($provinces);
    }

    public function getDistricts($provinceId)
{
    $districts = District::where('province_id', $provinceId)->get(['id', 'name']);
    return response()->json($districts);
}
}

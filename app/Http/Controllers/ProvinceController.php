<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\Request;
use Curl;

class ProvinceController extends Controller
{
    public function verProvincias(){
        $data = Curl::to("https://infra.datos.gob.ar/catalog/modernizacion/dataset/7/distribution/7.2/download/provincias.json")->get();
        dd(json_decode($data, true));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\Request;
use Curl;

class APIHelperController extends Controller {

 /* funcion para las Provincias */
    public function listadoAPI(){
        $data = [];
        $data ["province"] = Curl::to("https://infra.datos.gob.ar/catalog/modernizacion/dataset/7/distribution/7.2/download/provincias.json")->get();
     json_decode($data, true);
    }
/*
    public function checkout() {
        $province = Province::lists('name', 'id');
        return view('checkout', compact('province'));
    }
*/
/* funcion para los Paises*/

    public function listadoPaises ()){
        $data = [];
        $data ['country'] =  Curl::to("http://www.geognos.com/api/en/countries/info/FR.json")->get();
        json_decode($data, true);

    /*
    public function checkout() {
        $country = Country::lists('name', 'id');
        return view('checkout', compact('country));
    */
    }
    }
}




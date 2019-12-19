<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\Request;
use Curl;

class CountryController extends Controller
{
    public function verPaises(){
        $data = Curl::to("https://restcountries.eu/rest/v2/all")->get();
        dd(json_decode($data, true));
    }
}

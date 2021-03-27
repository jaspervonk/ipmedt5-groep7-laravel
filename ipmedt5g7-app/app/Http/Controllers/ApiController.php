<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    function api()
    {
        $barcode = 8710496976575;
        $data = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode)->json();
        return view('boodschappen.api', ['data'=>$data]);
    }
}

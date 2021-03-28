<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \GuzzleHttp\Client;
use Illuminate\Http\Client\Response;
use ArrayAccess;

class ApiController extends Controller
{
    // function api()
    // {
    //     $barcode = 8710496976575;
    //     $data = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
    //     $users = json_decode($data->json());
    //     return response()->json($users);

    //     // $client = new Client();
    //     // $body['item_attributes']='title';
    //     // $request = $client->get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
    //     // //$result = dd(json_decode($request->getBody()));
    //     // return view('boodschappen.api', ['data'=>dd(json_decode($request->getBody()))]);
    // }
    // function api(){
    //     $barcode = 8710496976575;         
    //     Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
    //     $response = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode)->toJson(JSON_PRETTY_PRINT);
        
    //     // $response = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode, [
    //     //     'title',
    //     //     'upc',
    //     //     'manufacturer',
    //     // ]);
    //     //["item_attributes"]
    //     return view('boodschappen.api', ['data'=>$response]);
    // }

    function api()
    {
        $barcode = 723175258273;         
        $response = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
        //dd($response->json());

        $item_attributes = $response->json()['item_attributes'];
        $title = $item_attributes['title'];
        $brand = $item_attributes['brand'];
        $upc = $item_attributes['upc'];
        return view('boodschappen.api', ['titleData'=>$title, 'brandData'=>$brand, 'upcData'=>$upc]);
    }
}

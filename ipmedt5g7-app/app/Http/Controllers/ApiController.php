<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use \GuzzleHttp\Client;
// use Illuminate\Http\Client\Response;
use \App\Models\Shoppinglist;
// use ArrayAccess;
// use DOMDocument;
// use \App\Goutte\Client;


class ApiController extends Controller
{
    public function api(Request $request)
    {
        $barcode = $request->input('EAN');
        //723175258273;         
        $response = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
        //dd($response->json());

        $item_attributes = $response->json()['item_attributes'];
        $title = $item_attributes['title'];
        $brand = $item_attributes['brand'];
        $upc = $item_attributes['upc'];
        //return view('boodschappen.api', ['titleData'=>$title, 'brandData'=>$brand, 'upcData'=>$upc]);

        //------------------------------------------------
        $Shoppinglist = new Shoppinglist;
        //$stored_products->EAN = $upc;
        $Shoppinglist->product = $title;
        $Shoppinglist->merk = $brand;
        $Shoppinglist->save();
        return redirect('/boodschappenlijst');
    }

    // public function api(Request $request)
    // {
    //     $barcode = 723175258273;
    //     $BASE_URL = 'https://www.coop.nl/product/';
    //     $response = Http::get($BASE_URL . $barcode);
    //     $data = $response->getBody()->getContents();
    //     return collect(json_decode(utf8_decode($data)));
    // }

    // public function api(Request $request){
    //     $barcode = 8710496976575;
    //     $BASE_URL = 'https://www.coop.nl/product/';

    //     $client = new Client();
    //     $page = $client::request('GET', $BASE_URL . $barcode);

    //     print($page);
    // }
}

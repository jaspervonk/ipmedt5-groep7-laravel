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
    public function api(Request $request, \App\Models\StoredProducts $storedProducts)
    {
        // Gebruik de meegegeven barcode om in de API te kijken
        $barcode = $request->input('EAN');       
        $response = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
        
        // Kijk of er een product is gevonden
        $item_response = $response->json()['item_response'];
        if($item_response['code'] == 200){
            // Voeg gevonden product toe aan de database
            $item_attributes = $response->json()['item_attributes'];

            $Shoppinglist = new Shoppinglist;
            $Shoppinglist->product = $item_attributes['title'];
            $Shoppinglist->merk = $item_attributes['brand'];
            $Shoppinglist->save();
            return redirect('/boodschappenlijst');
        }
        else{
            $product = $storedProducts::where('EAN', '=', $barcode)->first();
            if($product != NULL){
                $Shoppinglist = new Shoppinglist;
                $Shoppinglist->product = $product->product;
                $Shoppinglist->merk = $product->merk;
                $Shoppinglist->save();
                return redirect('/boodschappenlijst');
            }
        };       
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

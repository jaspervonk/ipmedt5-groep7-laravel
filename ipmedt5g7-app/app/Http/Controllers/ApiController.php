<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \App\Models\Shoppinglist;

class ApiController extends Controller
{
    public function api(Request $request, \App\Models\StoredProducts $storedProducts, \App\Models\ActiveShoppinglist $activeShoppinglistTable, \App\Models\Shoppinglist $shoppinglistTable)
    {
        // Als er een shoppingslist actief staat
        if($activeShoppinglistTable::count() == 0){
            return redirect('/boodschappenlijst');
        }
        else{
            // Gebruik de meegegeven barcode om in de API te kijken
            $barcode = $request->input('EAN');       
            $response = Http::get('https://api.barcodespider.com/v1/lookup?token=78ecdb5a897a3707a85b&upc=' . $barcode);
            
            // Kijk of er een product is gevonden
            $item_response = $response->json()['item_response'];
            if($item_response['code'] == 200){
                // Gebruik API product values
                $item_attributes = $response->json()['item_attributes'];

                $productTitle = $item_attributes['title'];
                $productBrand = $item_attributes['brand'];
            }
            else{
                // Gebruik stored product values
                $product = $storedProducts::where('EAN', '=', $barcode)->first();
                if($product != NULL){
                    $productTitle = $product->product;
                    $productBrand = $product->merk;
                }
                else{
                    return redirect('/boodschappenlijst');
                }
            }


            $activeShoppinglist = $activeShoppinglistTable::all()->first()->activeshoppinglist;
            // Kijk of het product al is toegevoegd aan de lijst
            if(($shoppinglistTable::where('product', '=', $productTitle)->where('merk', '=', $productBrand)->where('shoppinglist', '=', $activeShoppinglist)->exists())){
                // Het nieuwe aantal bepalen --> currentAantal + 1
                $shoppinglistAantal = $shoppinglistTable::where('product', '=', $productTitle)->where('merk', '=', $productBrand)->where('shoppinglist', '=', $activeShoppinglist)->first()->aantal + 1;
                // Update het nieuwe aantal
                $shoppinglistTable::where('product', '=', $productTitle)->where('merk', '=', $productBrand)->where('shoppinglist', '=', $activeShoppinglist)->update(['aantal' => $shoppinglistAantal]);
                return redirect('/boodschappenlijst');
            }
            else{
                // Maak een nieuw shoppinglistItem aan
                $Shoppinglist = new Shoppinglist;

                $Shoppinglist->product = $productTitle;
                $Shoppinglist->merk = $productBrand;
                $Shoppinglist->shoppinglist = $activeShoppinglist;
                $Shoppinglist->save();
                return redirect('/boodschappenlijst');
            }
        }             
    }
}

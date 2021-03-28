<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcToStoredProductsTableController extends Controller
{
    public function UpcToStoredProductsTable(Request $request){
        $stored_products = new StoredProducts;
        $stored_products->EAN = $upc;
        $stored_products->product = $title;
        $stored_products->merk = $brand;
        $stored_products->save();
        return redirect('/boodschappenlijst');
    }
}

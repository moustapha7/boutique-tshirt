<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produit;

class MainController extends Controller
{
    //liste des produits
    public function index()
    {
        $produits = Produit::all();
        return view('shop.index',['produits'=>$produits]);
    }

     //details d'un produit
     public function detailProduit()
     {
         $produits = Produit::all();
         return view('shop.index',['produits'=>$produits]);
     }
}

<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Category;

class MainController extends Controller
{
    //liste des produits
    public function index()
    {
        $produits = Produit::all();
        $categories = Category::where('is_online',1)->get(); 
        return view('shop.index',compact('produits','categories'));
    }

   /*   //details d'un produit
     public function detailProduit()
     {
         $produits = Produit::all();
         return view('shop.produit',['produits'=>$produits]);
     } */

     //details d'un produit
      public function produit(Request $request)
      {
         $produit = Produit::find($request->id);
        // $categories = Category::where('is_online',1)->get(); 
          return view('shop.produit',compact('produit'));
      }


      public function viewByCategory()
      {

       // $categories = Category::where('is_online',1)->get(); 
        return view('shop.categorie');
      }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        //On va faire une requête pour récupérer les produits dans notre db et les afficher sur notre vue
        $produits = Produit::all();
        //dd($produits); pour voir le contenu récupérer

        return view('shop/index', compact('produits'));
    }

    public function oneProduitDetail(Request $request){
        // echo 'page produits';
        // print_r($_GET);
        // die($_GET);
        //dd($_GET);
        //dd($request->id);
        $produit = Produit::find($request->id);
        return view('shop/oneProduitDetail', compact('produit'));
    }
}

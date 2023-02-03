<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();
        $produit->nom = "Un iphone";
        $produit->prix_ht = 400;
        $produit->description = "Un iphone";
        $produit->photo_principale = "iphone1.jpg";
        $produit->save();

    }
}

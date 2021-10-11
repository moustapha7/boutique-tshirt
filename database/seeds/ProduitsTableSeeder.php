<?php

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
        $products= new \App\Produit ();
        $products->nom ="Robe";
        $products->prix_ht =25;
        $products->description ="Robe pour soirée";
        $products->photo_principale ="dress1.jpg";
        $products->category_id =8;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Costume";
        $products->prix_ht =55;
        $products->description ="Costume pour soirée";
        $products->photo_principale ="blazer1.jpg";
        $products->category_id =9;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Costume";
        $products->prix_ht =75;
        $products->description ="Costume pour soirée";
        $products->photo_principale ="blazer2.jpg";
        $products->category_id =9;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Robe";
        $products->prix_ht =45;
        $products->description ="Robe pour soirée";
        $products->photo_principale ="dress2.jpg";
        $products->category_id =8;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Robe";
        $products->prix_ht =85;
        $products->description ="Robe pour soirée";
        $products->photo_principale ="dress3.jpg";
        $products->category_id =8;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Robe Chic";
        $products->prix_ht =65;
        $products->description ="Robe pour soirée";
        $products->photo_principale ="dress4.jpg";
        $products->category_id =8;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Pantalon";
        $products->prix_ht =69;
        $products->description ="Pantalon homme pour soirée";
        $products->photo_principale ="pants1.jpg";
        $products->category_id =7;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Pantalon";
        $products->prix_ht =25;
        $products->description ="Pantalon pour ecole";
        $products->photo_principale ="pants2.jpg";
        $products->category_id =7;
        $products->save();

        $products= new \App\Produit ();
        $products->nom ="Pantalon";
        $products->prix_ht =12;
        $products->description ="Pantalon pour foot";
        $products->photo_principale ="pants4.jpg";
        $products->category_id =7;
        $products->save();
    }
}

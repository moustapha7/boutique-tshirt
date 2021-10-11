<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    public function category()
    {
        return $this->belongsTo(Category::class);
        // ou  return $this->belongsTo("App\Category");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //recupere le Categorie parent d'une categorie
    public function parent()
    {
       return $this->belongsTo("App\Category",'parent_id');
    }

    //recupere le Categorie enfant d'une categorie
    public function children()
    {
       return $this->hasMany("App\Category",'parent_id');
    }
}

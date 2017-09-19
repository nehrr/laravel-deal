<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Annonce;

class Categorie extends Model
{
    public function annonces(){
        return $this->hasMany(Annonce::class);
    }
}

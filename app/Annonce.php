<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;
use App\Categorie;

class Annonce extends Model
{
       public function avis(){
        return $this->hasMany(Note::class);
    }
    
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
}

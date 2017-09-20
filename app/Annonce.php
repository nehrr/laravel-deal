<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;
use App\Categorie;
use App\User;
use App\Photo;

class Annonce extends Model
{
       public function avis(){
        return $this->hasMany(Note::class);
    }
    
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    public function membre(){
        return $this->belongsTo(User::class);
    }
    
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    
}

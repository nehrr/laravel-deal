<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;

class Annonce extends Model
{
       public function avis(){
        return $this->hasMany(Note::class);
    }
}

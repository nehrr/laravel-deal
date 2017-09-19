<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Annonce;

class Commentaire extends Model
{
    public function membre(){
        return $this->belongsTo(User::class);
    }
    
    public function annonce(){
        return $this->belongsTo(Annonce::class);
    }
}

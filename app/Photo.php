<?php

namespace App;
use App\Annonce;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function annonce(){
        return $this->belongsTo(Annonce::class);
    }
}

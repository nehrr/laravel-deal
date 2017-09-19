<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function membre1(){
        return $this->belongsTo(User::class);
    }
    
    public function membre2(){
        return $this->belongsTo(User::class);
    }
    
}

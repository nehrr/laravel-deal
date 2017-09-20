<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function membre_id1(){
        return $this->belongsTo(User::class);
    }
    
    public function membre_id2(){
        return $this->belongsTo(User::class);
    }
    
}

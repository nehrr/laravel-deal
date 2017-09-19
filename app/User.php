<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Annonce;
use App\Note;
use App\Commentaire;

class User extends Authenticatable
{
    use Notifiable;
    
    public function annonces(){
        return $this->hasMany(Annonce::class);
    }
    
    public function notes(){
        return $this->hasMany(Note::class);
    }
    
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

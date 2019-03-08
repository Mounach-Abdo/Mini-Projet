<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function utilisateur(){                         /*   un utilisateur a un numero de telephone   */ 
        return $this->belongsTo('App\Utilisateur');                 
    }
}

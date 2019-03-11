<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function adresses(){                         /*   un state peut avoir un ou plusieurs adresses   */ 
        return $this->hasMany('App\Adress');                 
}

public function country(){                         /*   states parcequ'un pays peut avoir plusieurs states   */ 
    return $this->belongsTo('App\Country');                 /* des states appartiennent a un seule pay */
}

}
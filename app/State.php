<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function adresses(){                         /*   un state peut avoir un ou plusieurs adresses   */ 
        return $this->hasMany('App\Adress');                 
}


}
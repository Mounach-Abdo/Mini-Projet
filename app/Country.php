<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function adresses(){                         /*   adresses parcequ'un pays peut avoir plusieurs adresses   */ 
        return $this->hasMany('App\Adress');                 /* des adresses appartiennent a un seule pay */
    }
    public function states(){                         /*   states parcequ'un pays peut avoir plusieurs states   */ 
        return $this->hasMany('App\State');                 /* des states appartiennent a un seule pay */
    }
}

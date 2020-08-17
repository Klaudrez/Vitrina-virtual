<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedSolidaria extends Model
{
    public function RRSSUser(){ //$RRSS->User->nombre
        return $this->belongsTo(User::class); //Pertenece a un Usuario 
    }
}

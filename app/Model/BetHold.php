<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BetHold extends Model
{
    public function clientInfo(){
    	return $this->belongsTo('App\User', 'clientid');
    }

}

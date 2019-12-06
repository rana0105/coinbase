<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BetWin extends Model
{
    public function clientWinInfo(){
    	return $this->belongsTo('App\User', 'clientid');
    }

    public function betWinInfo(){
    	return $this->belongsTo('App\Model\BetTable', 'betid');
    }
}

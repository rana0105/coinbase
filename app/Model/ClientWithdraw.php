<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientWithdraw extends Model
{
		protected $fillable = ['status'];

    public function clientWinInfo(){
    	return $this->belongsTo('App\User', 'clientid');
    }

    public function agentWinInfo(){
    	return $this->belongsTo('App\User', 'agentid');
    }
}

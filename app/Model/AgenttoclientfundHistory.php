<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AgenttoclientfundHistory extends Model
{
    public function agentuserh(){
    	return $this->belongsTo('App\User', 'from_agent');
    }

    public function clientuserhistory(){
    	return $this->belongsTo('App\User', 'to_client');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdmintoAgentfund extends Model
{
    public function adminuser(){
    	return $this->belongsTo('App\Admin', 'from_admin');
    }

    public function agentuser(){
    	return $this->belongsTo('App\User', 'to_agent');
    }
}

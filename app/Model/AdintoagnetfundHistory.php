<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdintoagnetfundHistory extends Model
{
		public function adminuserh(){
    	return $this->belongsTo('App\Admin', 'from_admin');
    }

    public function agentuserhistory(){
    	return $this->belongsTo('App\User', 'to_agent');
    }
}

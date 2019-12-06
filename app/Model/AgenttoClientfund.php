<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AgenttoClientfund extends Model
{
		protected $table = 'agentto_clientfunds';
    protected $fillable = ['amount'];
}

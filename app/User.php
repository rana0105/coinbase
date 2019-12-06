<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'mobile', 'refcode','usercode', 'useragentcode', 'agentcode', 'country', 'roleid', 'profileimage', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function adminuser(){
    //     return $this->belongsTo('App\Admin', 'from_admin');
    // }

    public function agentfund(){
        return $this->hasOne('App\Model\AdmintoAgentfund', 'to_agent');
    }

    public function clientfund(){
        return $this->hasOne('App\Model\AgenttoClientfund', 'to_client');
    }
}

<?php

namespace App\Model;

use App\Model\BetHold;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BetTable extends Model
{
    protected $fillable = ['name', 'price', 'quantity'];

}

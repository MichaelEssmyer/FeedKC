<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $fillable = ['user_id'];

    public function items()
    {
    	return $this->hasMany('App\Food');
    }

}

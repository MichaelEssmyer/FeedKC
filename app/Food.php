<?php

namespace App;

use App\Cart;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
 
    protected $fillable = ['type', 'title', 'amount', 'cart_id', 'donator_id'];


    public function cart() 
    {
    	 return $this->belongsTo('App\Cart');
    }

    public function donator()
    {
        return User::find($this->donator_id);
    }

}

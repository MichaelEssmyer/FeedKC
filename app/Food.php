<?php

namespace App;

use App\Cart;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
 
    protected $fillable = ['title', 'body', 'cart_id'];


    public function cart() 
    {
    	 $this->belongsTo('App\Cart');
    }
}

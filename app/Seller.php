<?php

namespace App;

use App\Product;

class Seller extends User
{
    public function products(){
    	$this -> hasMany(Product::class);
    }
}

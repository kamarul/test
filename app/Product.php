<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //polymorphic
    public function photos() {
    	return $this->morphMany('Photo','imageable');
    }
}

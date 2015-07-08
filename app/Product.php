<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //polymorphic
    public function photo() {
    	return $this->morphMany('App\Photo','imageable');
    }
}

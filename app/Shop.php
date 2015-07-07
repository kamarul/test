<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shops";

    //polymorphic
    public function photos() {
    	return $this->morphMany('Photo','imageable');
    }
}

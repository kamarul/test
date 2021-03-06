<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shops";

    //polymorphic
    public function photo() {
    	return $this->morphMany('App\Photo','imageable');
    }

    //hasmany
    public function promotion() {
    	return $this->hasmany('App\Promotion');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    //polymorphic
    public function photos() {
    	return $this->morphMany('Photo','imageable');
    }
}

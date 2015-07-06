<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';

    //Belong to many
    public function product() {
    	return $this->belongsTo('App\Product');
    }

    public function shop() {
    	return $this->belongsTo('App\Shop');
    }
}

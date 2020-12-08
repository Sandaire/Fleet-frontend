<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function delivery(){
		
		return $this->belongsToMany('App\Delivery');
	}
}

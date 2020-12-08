<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public function loading(){
        return $this->belongsTo('App\Loading');
    }
	
	public function location(){
        return $this->belongsTo('App\Location');
    }
}

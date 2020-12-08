<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    
	protected $table = "vehicles";
	
	protected $fillable = [
        'brand', 'model', 'code', 'immat', 'year', 'vin', 
		'odometer','color', 'type', 'n_citerne', 'capacity', 'is_new', 'affiliate', 'status', 'is_active','prosecon_vhclId','position',
    ];

	public function company(){
        return $this->belongsTo('App\Company');
    }
	
	public function loading(){		
		return $this->belongsToMany('App\Loading');
	}
}

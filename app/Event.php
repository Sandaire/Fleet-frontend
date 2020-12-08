<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
	
	protected $fillable = [
        'Duration', 'PlaceId', 'PlaceDescription', 'VehicleDescription', 'VehicleId',
    ];

}

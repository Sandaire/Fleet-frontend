<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = "evenements";
	
	protected $fillable = [
        'UserDescription', 'PlaceDescription', 'PlaceId', 'VehicleId', 'VehicleDescription',
		'PlaceEntryLocalTimestamp', 'PlaceExitLocalTimestamp', 'Duration',
    ];
}

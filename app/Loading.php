<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loading extends Model
{
    protected $table = "loadings";
	
	protected $fillable = [
        'destination', 'terminal', 'note', 'start_date', 'end_date', 'status', 'task_number',
		'is_safe_to_load','is_wait_for_loading', 'is_charged', 'is_scelle', 'is_outToDelivey',
		'is_safe_to_load_entry', 'is_safe_to_load_exit', 'is_wait_for_loading_entry','is_wait_for_loading_exit', 'is_charged_entry', 'is_charged_exit','is_scelle_entry', 'is_scelle_exit',
		'is_outToDelivey_entry', 'is_outToDelivey_exit', 'is_safe_to_load_duration','is_wait_for_loading_duration', 'is_charged_duration','is_scelle_duration', 'is_outToDelivey_duration'
    ];
				
	public function vehicle(){
        return $this->belongsTo('App\Vehicle');
    }
	
	public function deliveries(){
		
		return $this->belongsToMany('App\Delivery');
	}
}

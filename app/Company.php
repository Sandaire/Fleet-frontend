<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Company extends Model
{
	public function vehicle(){		
		return $this->belongsToMany('App\Vehicle');
	}
	public function user(){		
		return $this->belongsToMany('App\User');
	}
}

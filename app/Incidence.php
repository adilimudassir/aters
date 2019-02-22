<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Incidence extends BaseModel
{
	protected $guarded = [];

    public function pollingUnitIncidence()
    {
    	return $this->BelongsTo('App\PollingUnitIncidence');
    }

    public function evidence()
    {
    	return $this->hasOne('App\Evidence');
    }
}

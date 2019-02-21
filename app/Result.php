<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Result extends BaseModel
{
    protected $guarded = [];

    public function pollingUnit()
    {
    	return $this->belongsTo(PollingUnit::class);
    }

    public function type()
    {
    	return $this->belongsTo(Type::class);
    }
}

<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Ward extends BaseModel
{
    protected $guarded = [];

    public function pollingUnits()
    {
    	return $this->hasMany(PollingUnit::class);
    }

    public function lga()
    {
    	return $this->belongsTo(Lga::class);
    }

}

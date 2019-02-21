<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Type extends BaseModel
{
    protected $guarded = [];

    public function results()
    {
    	return $this->hasMany(Result::class);
    }
}

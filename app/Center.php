<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Center extends BaseModel
{
    protected $guarded = [];

    public function user()
    {
    	return $this->hasOne(User::class);
    }
}

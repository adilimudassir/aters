<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class PollingUnit extends BaseModel
{
    protected $guarded = [];

    public function pollingUnitIncidences()
    {
    	return $this->hasMany('App\PollingUnitIncidence');
    }

    public function user()
    {
    	return $this->hasOne(User::class);
    }

    public function results()
    {
    	return $this->hasMany(Result::class);
    }

    public function ward()
    {
    	return $this->belongsTo('App\Ward');
    }

    public function submitted()
    {
        $flag = true;
        foreach($this->results as $result){
            if($result->apc == 0){
                $flag = false;
            }
        }
        return $flag;
    }
}

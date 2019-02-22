<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,
        Cachable;
    protected $guarded = [];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function pollingUnit()
    {
        return $this->belongsTo(PollingUnit::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }

    public function ward()
    {
        return $this->belongsTo('App\Ward');
    }

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function jobAds()
    {
        return $this->belongsToMany('App\JobAd');
    }
}